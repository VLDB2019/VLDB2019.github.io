(function(win, doc) {
    var xhr;

    win.loadPage = function(page) {
        if (xhr) {
            xhr.abort();
        }

        var mainBody = doc.querySelector('main.body');
        if (!mainBody) return;

        mainBody.classList.add('loading');

        var headerCarousel = doc.querySelector('header .carousel');
        if (headerCarousel) headerCarousel.classList.add('small');

        xhr = new XMLHttpRequest();
        xhr.addEventListener('load', function() {
            var content = this.responseText,
                isNotFound = content.indexOf('data-page="404"') !== -1;

            if (isNotFound) {
                if (page !== 'coming-soon') loadPage('coming-soon');
                return;
            }

            /*
            [].forEach.call(mainBody.querySelectorAll('>*:not(.spinner)'), function(el) {
                console.log('removed', el);
                mainBody.removeChild(el);
            });
            */

            mainBody.innerHTML = content + '<div class="spinner"></div>';
            mainBody.classList.remove('loading');
            history.replaceState({}, doc.title, "/" + page);

            doc.documentElement.setAttribute('data-page', page);
        });
        xhr.open('GET', '/pages/' + page + '.html');
        xhr.send();
    };
})(window, document);