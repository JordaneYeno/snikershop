document.getElementById('basket').addEventListener("click", () =>{
    // alert('Panier Désactivé');  
});


panier = JSON.parse(localStorage.getItem('panier')) || [];

// alert(panier.length)   

let datas__chaussures = [];

const url__chaussures = async () => {
	datas__chaussures = await fetch(
		`http://localhost/citysport/public/api/chaussures/${url}`
	).then((res) => res.json());
	console.log(datas__chaussures)
};

grids__chaussures = async () => {
    await url__chaussures();
    //console.log(datas__chaussures.nomChaussure);
    
        document.getElementById('write').innerHTML += 
        `
            <div class="item box">
                <a href="product_details.html?code=${datas__chaussures.idxChaussure}">
                    <div class="cadre">
                        <img src="../assets/img/${datas__chaussures.images}" alt="" />
                    </div>
                </a>
                <div class="caption complet">
                    <h5>${datas__chaussures.nomChaussure}</h5>
                    <p>
                       Description du produit..
    
                    </p>
    
                    <h4>
                        <div class="size" >Pointure : ${datas__chaussures.taille}</div>
                        <div class="content" >
                            <div class="btn-primary price" >${datas__chaussures.prix} fcfa</div>
                        </div> 
                                               
                    </h4>
                    
                </div>
            </div>
    
        `
/*console.clear()*/}; grids__chaussures()


let id="display";

dataPanier();

function crudManager()
{
    
    const arrayAdd = {
        id: datas__chaussures.idxChaussure, 
        nom: datas__chaussures.nomChaussure, 
        quantite: document.getElementById('qte').value,
        prix: datas__chaussures.prix,
        taille: datas__chaussures.taille,
        total: parseInt(datas__chaussures.prix)*parseInt(document.getElementById('qte').value),
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
			arrayPanier[id].total=parseInt(datas__chaussures.prix)*parseInt(document.getElementById('qte').value);
			setData(arrayPanier);
			document.getElementById('msg').innerHTML='Data updated';
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
                <tr>
                    <td>${autoIncrement}</td>
                    <td>${arrayPanier[index].nom}</td>
                    <td>${arrayPanier[index].prix}</td>
                    <td>${arrayPanier[index].quantite}</td>
                    <td>${arrayPanier[index].prix}</td>
                    <td>
                        <a href="javascript:void(0)" onclick="editData(${index})">Edit</a>&nbsp;
                        <a href="javascript:void(0)" onclick="deleteData(${index})">Delete</a>
                    </td>
                </tr>

            `;
			autoIncrement++;
		}
		document.getElementById('root').innerHTML=renderForMe;
		
	}
}

function editData(event){
	id=event;
	let arrayPanier=dataCRUD();
	document.getElementById('qte').value=arrayPanier[event].quantite;
}

function deleteData(event){
	let arrayPanier=dataCRUD();
	arrayPanier.splice(event,1);
	setData(arrayPanier);
	dataPanier();
}

function dataCRUD(){
	let arrayPanier=JSON.parse(localStorage.getItem('panier'));
	return arrayPanier;
}

function setData(arrayPanier){
	localStorage.setItem('panier',JSON.stringify(arrayPanier));
}     