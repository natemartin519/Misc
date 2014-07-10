(function buildMenuBranch(nodes, parentElement) {
    if (typeof(nodes) != "undefined" && nodes.length > 0) {

        var newUnorderedList = document.createElement("UL");

        for (var i = 0; i < nodes.length; i++) {

            var newListItem = document.createElement("LI");
            var listItemText = document.createTextNode(nodes[i].text);

            // Process any child nodes else set link property
            if (typeof(nodes[i].nodes) != "undefined" && nodes[i].nodes.length > 0) {

                newListItem.appendChild(listItemText);
                newListItem.className = "parent";

                buildMenuBranch(nodes[i].nodes, newListItem)
            } else {

                var newLink = document.createElement("A");
                newLink.href = nodes[i].href;
                newLink.appendChild(listItemText);

                newListItem.appendChild(newLink);
            }

            newUnorderedList.appendChild(newListItem);
        }

        parentElement.appendChild(newUnorderedList);
    }
})(menuJSONObj.nodes, document.getElementById('menu'));
