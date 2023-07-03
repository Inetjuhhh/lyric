const table = document.getElementById('dragTable');
let draggedItem = null;

// Event listeners for drag and drop events
table.addEventListener('dragstart', (event) => {
    draggedItem = event.target;
    event.target.style.opacity = '0.5';
});

table.addEventListener('dragover', (event) => {
    event.preventDefault();
});

table.addEventListener('drop', (event) => {
    event.preventDefault();
    if (event.target.tagName === 'TD') {
        const dropTarget = event.target;
        const parentRow = dropTarget.parentNode;
        parentRow.insertBefore(draggedItem.parentNode, dropTarget.parentNode);
    }
});

table.addEventListener('dragend', (event) => {
    event.target.style.opacity = '';
    draggedItem = null;
});
