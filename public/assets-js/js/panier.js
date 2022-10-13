
let panier = localStorage.getItem('panier')
let panierJson = JSON.parse(panier)
let arrayStorage = []
arrayStorage.push(panierJson)
let datas__paniers = arrayStorage[0]
somme()


function somme() {
    let panier = localStorage.getItem('panier')
    let panierJson = JSON.parse(panier)
    let arrayStorage = []
    arrayStorage.push(panierJson)
    let datas__paniers = arrayStorage[0]
    console.log(datas__paniers);
    const somme = datas__paniers.map(item => parseInt(item.total)).reduce((prev, curr) => prev + curr, 0);
    document.getElementById('priceTotal').value = somme
}

let id="display";

dataPanier();

function crudManager()
{
    const arrayAdd = {
        id: datas__paniers.idxChaussure, 
        nom: datas__paniers.nomChaussure, 
        quantite: document.getElementById('qte').value,
        prix: datas__paniers.prix,
        taille: datas__paniers.taille,
        total: parseInt(datas__paniers.prix)*parseInt(document.getElementById('qte').value),
        done: false,
        createdAt: new Date().getTime()
    }

	if(arrayAdd!=='')
	{
		if(id=='display')
        {
			let arrayPanier=dataCRUD();
			if(arrayPanier==null)
            {   
				let data=[arrayAdd];
				setData(data);
			}
            else
            {
				arrayPanier.push(arrayAdd);
				setData(arrayPanier);
			}
		}
        else
        {
			let arrayPanier=dataCRUD();
			arrayPanier[id].quantite=document.getElementById('qte').value;
			arrayPanier[id].total=parseInt(arrayPanier[id].prix)*parseInt(document.getElementById('qte').value);
			setData(arrayPanier);
            somme()
            document.getElementById('qte').value = "0"
		}
		dataPanier();
	}
}


function dataPanier(){
	let arrayPanier=dataCRUD();
	if(arrayPanier!=null){
		let renderForMe='';
		let autoIncrement=1;
		for(let index in arrayPanier){
			renderForMe +=
            `
                <tr class="tr-shadow">
                <td>${autoIncrement}</td>
                <td>${arrayPanier[index].nom}</td>
                <td>
                    <span class="block-email">${arrayPanier[index].taille}</span>
                </td>
                <td class="desc"> <input type="text" id="qte" value="${arrayPanier[index].quantite}"> </td>
                <td>${new Date(arrayPanier[index].createdAt).toLocaleString()}</td>
                <td>${arrayPanier[index].prix}</td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="javascript:void(0)" onclick="editData(${index})"><i class="zmdi zmdi-edit"></i></a>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a href="javascript:void(0)" onclick="deleteData(${index})"><i class="zmdi zmdi-delete"></i></a>
                        </button>
                    </div>
                </td>
                </tr>
                <tr class="spacer"></tr>
            `;
			autoIncrement++;
		}
		document.getElementById('renderList').innerHTML=renderForMe;
		
	}
}

function editData(event){
	id=event;
	let arrayPanier=dataCRUD();
	document.getElementById('qte').value=arrayPanier[event].quantite;
    console.log(arrayPanier[event].quantite)

    
let nombre = document.getElementById('qte')
let cpt = parseInt(nombre.value);
document.getElementById('incr').addEventListener('click', () => {
        cpt = cpt + 1;
        nombre.value = cpt
})

document.getElementById('decr').addEventListener('click', () => {
        cpt = cpt - 1;
        nombre.value = cpt
})
}

function deleteData(event){
	let arrayPanier=dataCRUD();
	arrayPanier.splice(event,1);
	setData(arrayPanier);
	dataPanier();
    somme()
    document.getElementById('qte').value = "0"
}

function dataCRUD(){
	let arrayPanier=JSON.parse(localStorage.getItem('panier'));
	return arrayPanier;
}

function setData(arrayPanier){
	localStorage.setItem('panier',JSON.stringify(arrayPanier));
}