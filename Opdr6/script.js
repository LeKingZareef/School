function changeImage() {
    var image = document.getElementById('img');

    if (image.src.match("1.jpg")) {
        image.src = "2.jpg";
    } else if (image.src.match("2.jpg")) {
        image.src = "3.jpg";
    } else {
        image.src = "1.jpg";
    }
}
