const base_url = window.location.origin;

const notesDiv = document.getElementById('main-notes');

function deleteNote(id) {
    axios.delete(base_url + '/notes/' + id)
        .then((response) => {
            const note = document.getElementById('note-' + id);

            notesDiv.removeChild(note);
        }).catch((e) => {
            console.log(e);
        });
}
