function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("recipeSearch");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}

function classFilter(type) {
    var dishType;
    dishType = document.getElementsByClassName(type);
    for (i = 0; i < dishType.length; i++) {
        dishType[i].style.display = "";
    }
    cardsCollection = document.getElementsByClassName("card");
    for (i = 0; i < cardsCollection.length; i++) {
        if (!cardsCollection[i].classList.contains(type)) {
            cardsCollection[i].style.display = "none";
        }
    }
    if (type == "All") {
        for (i = 0; i < cardsCollection.length; i++) {
            cardsCollection[i].style.display = "";
        }
    }
}