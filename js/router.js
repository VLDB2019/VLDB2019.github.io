(function(win, doc) {
    var xhr;

    win.loadPage = function(page, addToHistory) {
        if (xhr) {
            xhr.abort();
        }

        var mainBody = doc.querySelector('main.body');
        if (!mainBody) return;

        var header = doc.querySelector('body>header');
        if (header) {
            header.setAttribute('aria-disabled', 'true');
            header.removeAttribute('aria-expanded');
        }

        mainBody.classList.add('loading');

        var headerCarousel = doc.querySelector('header .carousel');
        if (headerCarousel) {
            if (page && page !== 'home') headerCarousel.classList.add('small');
            else headerCarousel.classList.remove('small');
        }

        xhr = new XMLHttpRequest();
        xhr.addEventListener('load', function() {
            var content = this.responseText,
                title = 'VLDB 2019 - ' + this.getResponseHeader('X-Page-Title'),
                loc = (page && page !== 'home') ? '?' + page : '';

            if (addToHistory !== false) history.pushState(null, '', './' + loc);

            mainBody.innerHTML = content + '<div class="spinner"></div>';
            mainBody.classList.remove('loading');
            document.title = title;

            if (gtag) gtag('config', 'UA-115776710-1', {'page_path': '/2019/' + loc});

            doc.documentElement.setAttribute('data-page', page);
            if (header) {
                setTimeout(function() {
                    header.removeAttribute('aria-disabled');
                }, 200);
            }
        });

        xhr.open('GET', './include.php?' + page);
        xhr.send();
    };

    window.onpopstate = function(e) {
        var page = document.location.href.replace(/^.*\/\??([^\/]*)$/, '$1');
        loadPage(page, false);
    };

    doc.delegateEventListener('click', 'a[href^="./\\?"], a[href="./"]', function(e) {
        if (e.which === 3 || e.button === 2 || e.shiftKey || e.ctrlKey || e.metaKey) return;
        e.preventDefault();
        var page = this.getAttribute('href').replace(/^\.\/\??/, '');
        loadPage(page);
    });

    doc.delegateEventListener('click', 'a[href^="http://"], a[href^="https://"]', function(e) {
        if (e.which === 3 || e.button === 2 || e.shiftKey || e.ctrlKey || e.metaKey) return;
        e.preventDefault();
        var loc = this.getAttribute('href');
        window.open(loc);
    });

    doc.delegateEventListener('click', 'a[href^="mailto:"][data-uz][data-at]', function(e) {
        e.preventDefault();
        var loc = 'mailto:' + this.getAttribute('data-uz') + '@' + this.getAttribute('data-at');
        document.location.href = loc;
    });
})(window, document);