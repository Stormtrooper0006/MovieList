function searchSort() {
    var input, filter, match, cardList, cardItem, title;

    input = document.getElementById("movieSearch");
    filter = input.value.toUpperCase();
    cardList = document.getElementById("movieCardList");
    cardItem = cardList.getElementsByClassName("card-item");

    for (var i = 0; i < cardItem.length; i++) {
        title = cardItem[i].getElementsByTagName("h5");
        for (var j = 0; j < title.length; j++)
            if (title[j].innerHTML.toUpperCase().indexOf(filter) != -1)
                match = true;

        if (match) {
            cardItem[i].style.display = "";
            match = false;
        } else cardItem[i].style.display = "none";
    }
}

function sortAsc() {
    var cardList, cardItem, title, swapping, needSwap;

    cardList = document.getElementById("movieCardList");

    swapping = true;

    while (swapping) {
        swapping = false;
        cardItem = cardList.getElementsByClassName("card-item");
        title = cardList.getElementsByTagName("h5");
        for (var i = 0; i < title.length - 1; i++) {
            needSwap = false;
            if (
                title[i].innerHTML.toLowerCase() >
                title[i + 1].innerHTML.toLowerCase()
            ) {
                needSwap = true;
                break;
            }
        }
        if (needSwap) {
            cardItem[i].parentNode.insertBefore(cardItem[i + 1], cardItem[i]);
            swapping = true;
        }
    }
}

function sortDsc() {
    var cardList, cardItem, title, swapping, needSwap;

    cardList = document.getElementById("movieCardList");

    swapping = true;

    while (swapping) {
        swapping = false;
        cardItem = cardList.getElementsByClassName("card-item");
        title = cardList.getElementsByTagName("h5");
        for (var i = 0; i < title.length - 1; i++) {
            needSwap = false;
            if (
                title[i].innerHTML.toLowerCase() <
                title[i + 1].innerHTML.toLowerCase()
            ) {
                needSwap = true;
                break;
            }
        }
        if (needSwap) {
            cardItem[i].parentNode.insertBefore(cardItem[i + 1], cardItem[i]);
            swapping = true;
        }
    }
}
