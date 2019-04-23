(function(ELEMENT) {
    "use strict";
    ELEMENT.matches = ELEMENT.matches || ELEMENT.mozMatchesSelector || ELEMENT.msMatchesSelector || ELEMENT.oMatchesSelector || ELEMENT.webkitMatchesSelector;

    ELEMENT.closest = ELEMENT.closest || function closest(selector) {
        var element = this;

        while (element.parentElement) {
            if (element.matches(selector)) return element;

            element = element.parentElement;
        }

        return null;
    };
}(Element.prototype));

(function(Event, EventTarget, GLOBAL) {
    "use strict";
    var hash = {},
        map = {},
        STAMP = 'data-delegate-stamp',
        remove = function(stamp, event, selector, callback) {
            var node = map[stamp];
            if (!stamp || !hash[stamp] || !node) return;

            if (event && !hash[stamp][event]) return;
            if (event) {
                if (callback && !hash[stamp][event][callback]) return;
                if (selector !== undefined) {
                    // If callback is missing, remove all callback-seector combos
                    ((callback && [callback]) || Object.keys(hash[stamp][event])).forEach(function(callback) {
                        var idx = hash[self][event][callback].indexOf(selector);
                        if (idx >= 0) {
                            hash[stamp][event][callback].splice(idx, 1);
                            if (hash[stamp][event][callback].length === 0) {
                                node.removeEventListener(event, callback/*, true*/);
                                delete hash[self][event][callback];
                            }
                        }
                    });
                } else {
                    Object.keys(hash[stamp][event]).forEach(function(callback) {
                        node.removeEventListener(event, callback/*, true*/);
                        delete hash[self][event][callback];
                    });
                }
            } else {
                Object.keys(hash[stamp]).forEach(function(event) {
                    remove(stamp, event);
                });
                delete hash[stamp];
                node.removeAttribute(STAMP);
                delete map[stamp];
            }
        },
        observer = new MutationObserver(function(mutations) {
            if (mutations.some(function(mutation) {
                    return mutation.removedNodes.length;
                })) {
                setTimeout(function() {
                    Object.keys(map).forEach(function(stamp) {
                        var node = map[stamp];
                        if (!node.parentNode && node.nodeType !== 9) remove(stamp);
                    });
                }, 1000);
            }
        });

    observer.observe(document, {childList: true, subtree: true});

    var stopPropagationOriginal = Event.prototype.stopPropagation;
    Event.prototype.stopPropagation = function() {
        this.propagationStopped = true;
        stopPropagationOriginal.apply(this, arguments);
    };
    var stopImmediatePropagationOriginal = Event.prototype.stopImmediatePropagation;
    Event.prototype.stopImmediatePropagation = function() {
        this.immediatePropagationStopped = true;
        this.propagationStopped = true;
        stopImmediatePropagationOriginal.apply(this, arguments);
    };

    EventTarget.prototype.delegateEventListener = function(event, selector, callback) {
        if (typeof(callback) !== 'function' || typeof(selector) !== 'string') return;
        // Throws exception if the selector is invalid, and that is what i want
        document.querySelector(selector);

        var self = this,
            stamp = (self.nodeType === 9 && 'document') || self.getAttribute(STAMP);

        if (!stamp) {
            do {
                stamp = Math.random();
            } while (hash[stamp]);
        }

        map[stamp] = self;
        hash[stamp] = hash[stamp] || {};
        hash[stamp][event] = hash[stamp][event] || {};

        if (!hash[stamp][event][callback]) {
            self.addEventListener(event, function(e) {
                var target = e.target;

                hash[stamp][event][callback].forEach(function(selector) {
                    if (e.immediatePropagationStopped) return;

                    if (target.matches(selector)) callback.call(target, e, selector);
                });

                if (e.propagationStopped) return;
                hash[stamp][event][callback].forEach(function(selector) {
                    if (e.propagationStopped) return;

                    var parentElement = target.parentElement;
                    if (!parentElement) return;

                    target = parentElement.closest(selector);

                    if (self.contains(target)) callback.call(target, e, selector);
                });
            }/*, true*/);
            hash[stamp][event][callback] = [];
        }

        if (hash[stamp][event][callback].indexOf(selector) === -1) hash[stamp][event][callback].push(selector);
    };

    EventTarget.prototype.undelegateEventListener = function() {
        var stamp = this.getAttribute(STAMP),
            args = [stamp].concat(arguments);

        if (hash[stamp]) remove.apply(null, args);
    };

}(window.Event, window.EventTarget || window.Element, window));