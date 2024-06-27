function openForm(action) {
    let form = document.getElementById("myForm");
    let formTitle = document.getElementById("form-title");
    
    if (action === "import") {
        formTitle.textContent = "Import Form";
        document.getElementById("action").value = "import";
    } else if (action === "export") {
        formTitle.textContent = "Export Form";
        document.getElementById("action").value = "export";
    }

    form.style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}