(function(doc) {
    doc.delegateEventListener('click', '.talk-abstract:not(.talks-expanded), .talk-abstract.talks-expanded .talk-abstract-action', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var talk = e.target.closest('.talk-abstract');
        if (talk) talk.classList.toggle('talk-expanded');
    });
    doc.delegateEventListener('click', '.talk-bio:not(.bio-expanded), .talk-bio.bio-expanded .talk-bio-action', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var bio = e.target.closest('.talk-bio');
        if (bio) bio.classList.toggle('bio-expanded');
    });
})(document);