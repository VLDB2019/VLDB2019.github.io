(function initCarousel(doc) {
    var root = doc.querySelector('.carousel[data-images]');
    if (!root) {
        return setTimeout(initCarousel, 1000);
    }

    var data;
    try {
        data = JSON.parse(root.getAttribute('data-images'));
    } catch (ex) {
        return;
    }

    var imgs = data,
        preLoaded = [],
        empty = true,
        i = 0;

    function loadNextImg() {
        if (imgs.length > 0) {
            loadImg(imgs.shift());
        }
    }

    function loadImg(obj) {
        if (!obj || !obj.i) {
            console.log('Failed to parse', obj);
            return loadNextImg();
        }
        var img = new Image();
        img.onload = function() {
            this.onerror = this.onabort = this.onload = null;
            preLoaded.push(obj);
            loadNextImg();
        };
        img.onerror = img.onabort = function() {
            this.onerror = this.onabort = this.onload = null;
            loadNextImg();
        };
        img.src = obj.i;
    }

    function clearPrev() {
        [].forEach.call(root.querySelectorAll('div:not(:last-child)'), function(el) {
            root.removeChild(el);
        });
    }

    loadNextImg();
    loadNextImg();
    loadNextImg();

    root.addEventListener('transitionend', function(e) {
        clearPrev();
    });

    (function showNext() {
        var preLoadedLength = preLoaded.length,
            j = (i + 1) % preLoadedLength,
            obj = preLoaded[j],
            line = obj && obj.t,
            url = obj && obj.i;

        if (preLoadedLength === 0 || !url) {
            return setTimeout(showNext, 1000);
        }

        if (preLoadedLength > 1) {
            i = j;
            var child = doc.createElement('div');
            child.style.backgroundImage = 'url(' + url + ')';
            child.setAttribute('data-url', url);
            doc.body.setAttribute('carousel-img', url);

            if (line) {
                var credit = doc.createElement('div');
                credit.classList.add('carousel-credit');
                credit.innerHTML = line;
                child.appendChild(credit);
            }

            root.appendChild(child);

            setTimeout(function() {
                child.style.opacity = 1;
                empty = false;
            }, empty ? 100 : 1000);

            setTimeout(function() {
                clearPrev();
            }, 3000);
        }

        setTimeout(showNext, 15000);
    })();
})(document);