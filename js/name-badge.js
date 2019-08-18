if (!(a => (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series[46]0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br[ev]w|bumb|bw-[nu]|c55\/|capi|ccwa|cdm-|cell|chtm|cldc|cmd-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc-s|devi|dica|dmob|do[cp]o|ds(12|-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly[-_]|g1 u|g560|gene|gf-5|g-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd-[mpt]|hei-|hi(pt|ta)|hp( i|ip)|hs-c|ht(c[- _agpst]|tp)|hu(aw|tc)|i-(20|go|ma)|i230|iac[ \-\/]|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja[tv]a|jbro|jemu|jigs|kddi|keji|kgt[ \/]|klon|kpt |kwc-|kyo[ck]|le(no|xi)|lg( g|\/[klu]|50|54|-[a-w])|libw|lynx|m1-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t[- ov]|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30[02]|n50[025]|n7(0[01]|10)|ne([cm]-|on|tf|wf|wg|wt)|nok[6i]|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan[adt]|pdxg|pg(13|-([1-8]|c))|phil|pire|pl(ay|uc)|pn-2|po(ck|rt|se)|prox|psio|pt-g|qa-a|qc(07|12|21|32|60|-[2-7]|i-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h-|oo|p-)|sdk\/|se(c[-01]|47|mc|nd|ri)|sgh-|shar|sie[-m]|sk-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h-|v-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl-|tdg-|tel[im]|tim-|t-mo|to(pl|sh)|ts(70|m-|m3|m5)|tx-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c[- ]|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas-|your|zeto|zte-/i.test(a.substr(0,4))))(navigator.userAgent||navigator.vendor||window.opera))
document.body.classList.add('desktop');

document.title = NAME;

const refreshUI = () => {
    clearUI();
    setTimeout(adjustUI, 100);
};
const clearUI = () => {
    document.body.innerHTML = '<h1><span></span></h1><h2><span></span></h2><h3><span></span></h3><div><button>Save</button></div>';
};
const adjustUI = () => {
    let maxWidth = document.body.getBoundingClientRect().width;
    let maxHeight = document.body.getBoundingClientRect().height;
    if (maxWidth > 400 && document.body.classList.contains('desktop')) maxWidth = 400;
    const portrait = maxHeight > maxWidth;
    const maxHeights = (portrait ? [.4, .12, .08] : [.3, .2, .15]).map(ratio => maxHeight * ratio);

    const elName = document.querySelector('h1>span');
    let rect;

    elName.textContent = NAME;
    let start = 7;
    do {
        start -= 0.1;
        elName.style.fontSize = `${start}em`;
        rect = elName.getBoundingClientRect();
    } while (rect.width > maxWidth * 0.86 || rect.height > maxHeights[0]);

    elName.style.visibility = 'visible';

    const elAffiliation = document.querySelector('h2>span');
    elAffiliation.textContent = AFFILIATION;
    start = start > 2 ? Math.min(8, .8 * start) : start;
    let preStart = start;
    let makeMulti = false;

    do {
        start -= 0.1;
        if (start < 1.7) {
            makeMulti = true;
            break;
        }
        elAffiliation.style.fontSize = `${start}em`;
        rect = elAffiliation.getBoundingClientRect();
    } while (rect.width > maxWidth * 0.84 || rect.height > maxHeights[1]);

    if (makeMulti) {
        elAffiliation.classList.add('multiline');
        start = preStart;
        do {
            start -= 0.1;
            elAffiliation.style.fontSize = `${start}em`;
            rect = elAffiliation.getBoundingClientRect();
        } while (rect.width > maxWidth * 0.84 || rect.height > maxHeights[1]);
        preStart = start;
    }

    elAffiliation.style.visibility = 'visible';

    const elEmail = document.querySelector('h3>span');
    elEmail.textContent = EMAIL;
    start = preStart;
    do {
        start -= 0.1;
        elEmail.style.fontSize = `${start}em`;
        rect = elEmail.getBoundingClientRect();
    } while (rect.width > maxWidth * 0.84 || rect.height > maxHeights[2]);

    elEmail.style.visibility = 'visible';

    const maxButtonWidth = portrait ? maxWidth * .3 : (.92 * maxWidth - 380);
    const maxButtonHeight = maxHeight - rect.bottom - (portrait ? 100 : Math.max(.1 * maxHeight, 30));

    console.log(`maxButtonWidth: ${maxButtonWidth}\tmaxButtonHeight: ${maxButtonHeight}`);

    const elSave = document.querySelector('button');
    start = 2.2;
    do {
        start -= 0.1;
        elSave.style.fontSize = `${start}rem`;
        rect = elSave.getBoundingClientRect();
    } while (rect.width > maxButtonWidth || rect.height > maxButtonHeight);

    elSave.style.visibility = 'visible';
};

document.addEventListener('DOMContentLoaded', refreshUI, false);
window.addEventListener('orientationchange', refreshUI, false);
window.addEventListener('resize', refreshUI, false);

const downloadCard = () => {
    const parts = NAME.split(/\s+/);
    const last = parts.pop();
    const first = parts.join(' ');
    const vCard = `BEGIN:VCARD
VERSION:3.0
FN;CHARSET=UTF-8:${NAME}
N;CHARSET=UTF-8:${last};${first};;;
EMAIL;CHARSET=UTF-8;type=WORK,INTERNET:${EMAIL}
ORG;CHARSET=UTF-8:${AFFILIATION}
NOTE:VLDB2019
REV:VLDB2019
END:VCARD
`;
    download(vCard, `${NAME}.vcf`, 'text/vcard');
};

document.addEventListener('click', e => {
    if (e.target.tagName.toUpperCase() !== 'BUTTON') return;
downloadCard();
}, false);