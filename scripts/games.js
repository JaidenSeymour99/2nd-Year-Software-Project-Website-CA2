console.log('games js');
window.onload = function () {

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

    console.log('games  js');
    var tblGames = document.getElementById('table-games');
    var tblGamesBody = tblGames.getElementsByTagName('tbody')[0];

    var inputSearch = document.getElementById('search');
    inputSearch.addEventListener('input', function (event) {
        var input = event.target;
        console.log(event);
        var filter = input.value.toUpperCase();
        var tableRows = tblGamesBody.children

        for (var i = 0; i < tableRows.length; i++) {
            var row = tableRows[i];
            row.style.display = "";
            var found = false;
            var cells = row.getElementsByClassName('cell');
            for (var j = 0; j < cells.length; j++) {
                var td = cells[j];
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            if (!found) {
                row.style.display = "none";
            }
        }
    });

    var sortBtns = document.getElementsByClassName('btn-sort');
    var sortBtnsArray = Array.from(sortBtns);

    sortBtnsArray.forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            var tableRows = Array.from(tblGamesBody.children);
            tableRows.sort(function (a, b) {
                var column = btn.dataset.column;
                var aValue = a.getElementsByClassName(column)[0].innerHTML;
                var bValue = b.getElementsByClassName(column)[0].innerHTML;

                if (aValue < bValue) {
                    return -1;
                } else if (aValue == bValue) {
                    return 0;
                } else if (aValue > bValue) {
                    return 1;
                }
            });
            reattachItems(tableRows);
        });
    });

    function reattachItems(items) {
        for (var i = 0, len = items.length; i < len; i++) {
            var parent = items[i].parentNode;
            var detatchedItem = parent.removeChild(items[i]);
            parent.appendChild(detatchedItem);
        }
    }
};
