(function initCarousel(doc) {
    var root = doc.querySelector('.carousel[data-images]');
    if (!root) {
        return setTimeout(initCarousel, 1000);
    }

    var imgs = root.getAttribute('data-images').split('|'),
        preLoaded = [],
        i = 0;

    function loadNextImg() {
        if (imgs.length > 0) {
            loadImg(imgs.shift());
        }
    }

    function loadImg(url) {
        var img = new Image();
        img.onload = function() {
            this.onerror = this.onabort = this.onload = null;
            preLoaded.push(url);
            loadNextImg();
        };
        img.onerror = img.onabort = function() {
            this.onerror = this.onabort = this.onload = null;
            loadNextImg();
        };
        img.src = url;
    }

    loadNextImg();
    loadNextImg();
    loadNextImg();

    (function showNext() {
        var preLoadedLength = preLoaded.length,
            j = (i + 1) % preLoadedLength,
            url = preLoaded[j];

        if (preLoadedLength === 0 || !url) {
            return setTimeout(showNext, 1000);
        }

        if (preLoadedLength > 1) {
            i = j;
            var child = doc.createElement('div');
            child.style.backgroundImage = 'url(' + url + ')';
            child.setAttribute('data-url', url);
            doc.body.setAttribute('carousel-img', url);
            root.appendChild(child);
            setTimeout(function() {
                child.style.opacity = 1;
            }, 0);

            setTimeout(function() {
                [].forEach.call(root.querySelectorAll('div:not(:last-child)'), function(el) {
                    root.removeChild(el);
                });
            }, 1000);
        }

        setTimeout(showNext, 15000);
    })();
})(document);