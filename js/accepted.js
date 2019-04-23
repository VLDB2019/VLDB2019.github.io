(function(doc) {
    doc.delegateEventListener('click', '.accepted-abstract:not(.accepted-expanded), .accepted-abstract.accepted-expanded .accepted-abstract-action', function(e) {
        console.log(e.target);
        e.preventDefault();
        e.stopPropagation();
        var abstract = e.target.closest('.accepted-abstract');
        if (abstract) abstract.classList.toggle('accepted-expanded');
    });
})(document);