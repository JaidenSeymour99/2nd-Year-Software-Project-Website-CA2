window.onload = function () {
    console.log('main  js');
    var deleteLinks = document.getElementsByClassName("delete");
    for (var i = 0; i != deleteLinks.length; i++) {
        var link = deleteLinks[i];
        link.addEventListener("click", function (event) {
            var deleteConfirmed = confirm("Are you sure you want to delete this?");
            if (!deleteConfirmed) {
                event.preventDefault();
            }
        });
    }
}