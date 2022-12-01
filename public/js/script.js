function searchSort() {
    var input, filter, match, cardList, cardItem, title;

    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    cardList = document.getElementById("cardList");
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

    cardList = document.getElementById("cardList");

    swapping = true;

    while (swapping) {
        swapping = false;
        cardItem = cardList.getElementsByClassName("card-item");
        title = cardList.getElementsByTagName("h5");
        for (var i = 0; i < title.length - 1; i++) {
            needSwap = false;
            if (
                title[i].innerHTML.toUpperCase() >
                title[i + 1].innerHTML.toUpperCase()
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

    cardList = document.getElementById("cardList");

    swapping = true;

    while (swapping) {
        swapping = false;
        cardItem = cardList.getElementsByClassName("card-item");
        title = cardList.getElementsByTagName("h5");
        for (var i = 0; i < title.length - 1; i++) {
            needSwap = false;
            if (
                title[i].innerHTML.toUpperCase() <
                title[i + 1].innerHTML.toUpperCase()
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

function showAll() {
    var match, cardList, cardItem, genre;

    cardList = document.getElementById("cardList");
    cardItem = cardList.getElementsByClassName("card-item");

    for (var i = 0; i < cardItem.length; i++) cardItem[i].style.display = "";
}

function sortGenre(input) {
    var match, cardList, cardItem, genre;

    cardList = document.getElementById("cardList");
    cardItem = cardList.getElementsByClassName("card-item");

    for (var i = 0; i < cardItem.length; i++) {
        genre = cardItem[i].getElementsByClassName("genre");
        for (var j = 0; j < genre.length; j++)
            if (genre[j].innerHTML === input) match = true;
        if (match) {
            cardItem[i].style.display = "";
            match = false;
        } else cardItem[i].style.display = "none";
    }
}

function sortComedy() {
    sortGenre("Comedy");
}
function sortCrime() {
    sortGenre("Crime");
}
function sortDrama() {
    sortGenre("Drama");
}
function sortAction() {
    sortGenre("Action");
}
function sortFantasy() {
    sortGenre("Fantasy");
}
function sortHistory() {
    sortGenre("History");
}

function sortStatus(input) {
    var match, cardList, cardItem, status;

    cardList = document.getElementById("cardList");
    cardItem = cardList.getElementsByClassName("card-item");

    for (var i = 0; i < cardItem.length; i++) {
        status = cardItem[i].getElementsByClassName("status");
        for (var j = 0; j < status.length; j++)
            if (status[j].innerHTML === input) match = true;
        if (match) {
            cardItem[i].style.display = "";
            match = false;
        } else cardItem[i].style.display = "none";
    }
}

function sortPlanned() {
    sortStatus("Planned");
}
function sortWatching() {
    sortStatus("Watching");
}
function sortFinished() {
    sortStatus("Finished");
}
