let imgShoes = "";
let imgMarks = "";

async function updateFile(nameFile) 
{
    let formData = new FormData(); 
    formData.append("file", nameFile.files[0]);
    console.log(formData);
    await fetch('upload.php', 
    {
        method: "POST", 
        body: formData
    });
}

const fileSelectorSchoes = document.getElementById('fileUploadSchoes');
fileSelectorSchoes.addEventListener('change', (event) => {
    const fileList = event.target.files;
    fileList.reader;
    imgShoes = fileList[0].name;
    console.log(imgShoes);
});

const fileSelectorMark = document.getElementById('fileUploadMark');
fileSelectorMark.addEventListener('change', (event) => {
    const fileList = event.target.files;
    fileList.reader;
    imgMarks = fileList[0].name;
    console.log(imgMarks);
});


function addShoes() {

    let marque = document.getElementById('marque').value;
    let taille = document.getElementById('taille').value;
    let couleur = document.getElementById('couleur').value;
    let prix = document.getElementById('prix').value;
    let nom = document.getElementById('nom').value;
    
    let msg = document.getElementById('msg-shoes');    

    fetch('http://localhost/citysport/public/api/chaussures/add', {
        method: 'POST',
        headers: {'content-type': 'application/json'},
        body: JSON.stringify(
            {
                "idxMarque": marque,
                "taille": taille,
                "couleur": couleur,
                "prix": prix,
                "nomChaussure": nom,
                "images": imgShoes
            }
        )
    })
    
    .then(res => {
        if(res.ok) {msg.innerHTML = 'Enregistrez avec succèss'; document.getElementById('chaussureAdd').reset();}
        else {msg.innerHTML = 'Champs manquant'; console.log('fail POST');}
        return res
    })
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(error => console.log(error))

    updateFile(fileUploadSchoes) 

}

function addMarks() {

    let nom = document.getElementById('nomMarque').value;
    
    let msg = document.getElementById('msg-mark');  
    if(nom === "") {msg.innerHTML = 'Champs manquant'}  
    else 
    {
        fetch('http://localhost/citysport/public/api/marques/add', {
        method: 'POST',
        headers: {'content-type': 'application/json'},
        body: JSON.stringify(
                {
                    "marque": nom,
                    "logo": imgMarks
                }
            )
        })
        
        .then(res => {
            if(res.ok) {msg.innerHTML = 'Enregistrez avec succèss'; document.getElementById('marqueAdd').reset();}
            else {msg.innerHTML = 'Champs manquant'; console.log('fail POST');}
            return res
        })
        .then(res => res.json())
        .then(data => console.log(data))
        .catch(error => console.log(error))
        
        updateFile(fileUploadMark) 
    }

}

document.getElementById('responseChaussures').addEventListener('click', (e) => {
    e.preventDefault();
    let editShoes = e.target.parentElement.id == 'editShoesButton';
    let delShoes = e.target.parentElement.id == 'delShoesButton';

    let id = (e.target.parentElement.parentElement.dataset.id)

    let msg = document.getElementById('msg-shoes'); 


    if(delShoes) {
        fetch('http://localhost/citysport/public/api/chaussures/delete/'+id, {
            method: 'DELETE'
        })
    
        .then(res => {
            if(res.ok) {msg.innerHTML = 'Supprimez avec succès'; document.getElementById('chaussureAdd').reset(); setTimeout(reloadingPage(), 100)}
            else {msg.innerHTML = 'Champs manquant'; console.log('fail POST');}
            return res
        })
        .then(res => res.json())
        .then(data => console.log(data))
        .catch(error => console.log(error))
    }

    if(editShoes) {
        const parent = e.target.parentElement.parentElement.parentElement;
        let nom = parent.parentElement.querySelector('.nomChaussure').textContent;
        let taille = parent.parentElement.querySelector('.tailleChaussure').textContent;
        let couleur = parent.parentElement.querySelector('.couleurChaussure').textContent;
        let prix = parent.parentElement.querySelector('.prixChaussure').textContent;
        let marque = parent.parentElement.querySelector('.numMarque').textContent;

        
        let nomValue = document.getElementById('nom');
        let tailleValue = document.getElementById('taille');
        let couleurValue = document.getElementById('couleur');
        let prixValue = document.getElementById('prix');
        let idMarqueValue = document.getElementById('marque');

        nomValue.value = nom;
        tailleValue.value = taille;
        couleurValue.value = couleur;
        prixValue.value = prix 
        idMarqueValue.value = marque 

        let updateShoes = document.getElementById('clickShoes')
        let postChoes = document.getElementById('postChoes')

        updateShoes.style.display = 'block'
        postChoes.style.display = 'none'
    
    }    
        document.getElementById('clickShoes').addEventListener('click', (e) => {
        e.preventDefault();

        let nomValue = document.getElementById('nom');
        let tailleValue = document.getElementById('taille');
        let couleurValue = document.getElementById('couleur');
        let prixValue = document.getElementById('prix');
        let marqueValue = document.getElementById('marque');

        let msg = document.getElementById('msg-shoes');   
        
            fetch('http://localhost/citysport/public/api/chaussures/update/'+id, {
                method: 'PUT',
                headers: {'content-type': 'application/json'},
                body: JSON.stringify(
                    {
                        "idxMarque": marqueValue.value,
                        "taille": tailleValue.value,
                        "couleur": couleurValue.value,
                        "prix": prixValue.value,
                        "nomChaussure": nomValue.value,
                        "images": ""
                    }
                )
            })
    
            .then(res => {
                if(res.ok) {msg.innerHTML = 'Mise à jour effectuée'; document.getElementById('chaussureAdd').reset(); setTimeout(reloadingPage(), 100)}
                else {msg.innerHTML = 'Champs manquant'; console.log('fail POST');}
                return res
            })
            .then(res => res.json())
            .then(data => console.log(data))
            .catch(error => console.log(error))
       })
})

document.getElementById('responseMarques').addEventListener('click', (e) => {
    e.preventDefault();
    let editMarks = e.target.parentElement.id == 'editMarksButton';
    let delMarks = e.target.parentElement.id == 'delMarksButton';

    let id = (e.target.parentElement.parentElement.dataset.id)

    let msg = document.getElementById('msg-mark');   

    if(delMarks) {
        fetch('http://localhost/citysport/public/api/marques/delete/'+id, {
            method: 'DELETE'
        })
    
        .then(res => {
            if(res.ok) {msg.innerHTML = 'Supprimez avec succès'; document.getElementById('chaussureAdd').reset(); setTimeout(reloadingPage(), 100)}
            else {msg.innerHTML = 'Suppression echouer'; console.log('fail POST');}
            return res
        })
        .then(res => res.json())
        .then(data => console.log(data))
        .catch(error => console.log(error))
    }

    if(editMarks) {
        const parent = e.target.parentElement.parentElement.parentElement;
        let nom = parent.parentElement.querySelector('.nomMarque').textContent;
        //let image = parent.parentElement.querySelector('.imageMarque').textContent;

        console.log(nom)

        let nomValue = document.getElementById('nomMarque');
        //let imageMarks = document.getElementById('fileMarks');

        nomValue.value = nom;
        //imageMarks.value = image;

        let updateShoes = document.getElementById('clickMark')
        let postChoes = document.getElementById('postMark')

        updateShoes.style.display = 'block'
        postChoes.style.display = 'none'
    
    }    
        document.getElementById('clickMark').addEventListener('click', (e) => {
        e.preventDefault();

        let nomValue = document.getElementById('nomMarque');
    
        let msg = document.getElementById('msg-mark');  
        
            fetch('http://localhost/citysport/public/api/marques/update/'+id, {
                method: 'PUT',
                headers: {'content-type': 'application/json'},
                body: JSON.stringify(
                    {
                        "marque": nomValue.value,
                        "logo": ""
                    }
                )
            })
        
            .then(res => {
                if(res.ok) {msg.innerHTML = 'Mise à jour effectuée'; document.getElementById('marqueAdd').reset(); setTimeout(reloadingPage(), 100)}
                else {msg.innerHTML = 'Champs manquant'; console.log('fail POST');}
                return res
            })
            .then(res => res.json())
            .then(data => console.log(data))
            .catch(error => console.log(error))
       })
})

function reloadingPage() {location.reload()}


let arrayMark = [];

const list__Mark = async () => {
	arrayMark = await fetch(
		"http://localhost/citysport/public/api/marques/all"
	).then((res) => res.json());
	console.log(arrayMark)
}; 

marks = async () => {
    await list__Mark();
    
	let select = document.getElementById('marque')

    for (let i = 0; i < arrayMark.length; i++) {
    
        const option = document.createElement('option');

		option.value = `${arrayMark[i].idxMarque}`;
		option.text = `${arrayMark[i].marque}`;
		select.appendChild(option);
        
    };console.clear()
}; marks()