document.getElementById('basket').addEventListener("click", () =>{
    //alert('Panier Désactivé 00');  
});


let datas__chaussures = [];

const url__chaussures = async () => {
	datas__chaussures = await fetch(
		"http://localhost/citysport/public/api/chaussures/all"
	).then((res) => res.json());
	console.log(datas__chaussures)
};

const url__taille = async () => {
	datas__chaussures = await fetch(
		"http://localhost/citysport/public/api/chaussures/size/all"
	).then((res) => res.json());
	console.log(datas__chaussures)
};

const url__marques = async () => {
	datas__chaussures = await fetch(
		"http://localhost/citysport/public/api/marques/all"
	).then((res) => res.json());
	console.log(datas__chaussures)
};

grids__chaussures = async () => {
await url__chaussures();

for (let i = 0; i < datas__chaussures.length; i++) {

	document.getElementById('result').innerHTML += 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center"><a href="${datas__chaussures[i].idxChaussure}" class="btn" >Add</a>taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
};/*console.clear()*/}; grids__chaussures()


all__girds__marques = async () => {
    await url__marques();
    
    for (let i = 0; i < datas__chaussures.length; i++) {
    
        document.getElementById('slider-shoes').innerHTML += 
        `  
            <div class="swiper-slide">
                <div class="image-container">
                    <img width="140" class="img-responsive" src="../assets/img/${datas__chaussures[i].logo}" alt="${datas__chaussures[i].marque}">
                </div>
            </div> 
    
        `
};/*console.clear()*/}; all__girds__marques()


girds__tailles = async () => {
await url__taille();

	let select = document.getElementById('taille')

for (let i = 0; i < datas__chaussures.length; i++) {

	const option = document.createElement('option');

		option.value = `${datas__chaussures[i].idxTaille}`;
		option.text = `${datas__chaussures[i].taille}`;
		select.appendChild(option);

};/*console.clear()*/}; girds__tailles()


girds__marques = async () => {
await url__marques();

	let select = document.getElementById('marque')

for (let i = 0; i < datas__chaussures.length; i++) {

	const option = document.createElement('option');

		option.value = `${datas__chaussures[i].idxMarque}`;
		option.text = `${datas__chaussures[i].marque}`;
		select.appendChild(option);

};/*console.clear()*/}; girds__marques()


document.getElementById('form').addEventListener('submit', (e) => {
  e.preventDefault()

  const searchTerm = document.getElementById('search').value

  if (searchTerm && searchTerm !== '') {
    get__chaussures="http://localhost/citysport/public/api/chaussures/searchname/"+ searchTerm

    document.getElementById('search').value = '';

	 const url__chaussures = async () => {
		datas__chaussures = await fetch(get__chaussures).then((res) => res.json());
		console.log(datas__chaussures)
	};

grids__chaussures = async () => {
await url__chaussures();

		document.getElementById('resultSearchAll').innerHTML = '';

for (let i = 0; i < datas__chaussures.length; i++) {

	document.getElementById('result').style.display='none';

	if (datas__chaussures.length > 1) {
    
		document.getElementById('resultSearchAll').style.display='flex'; 
	document.getElementById('resultSearch').style.display='none';
		document.getElementById('resultSearchAll').innerHTML += 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center">taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
	}else{

		document.getElementById('resultSearch').style.display='inline';
	document.getElementById('resultSearchAll').style.display='none'; 
		document.getElementById('resultSearch').innerHTML = 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center">taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
	}
};/*console.clear()*/}; grids__chaussures()


  } else {

    window.location.reload()
  }
})



let selectMarque = document.getElementById('marque')

selectMarque.addEventListener('change', () =>{

	searchMarque = selectMarque.value;
 console.log(searchMarque)
  if (searchMarque && searchMarque !== '') {

	get__marques="http://localhost/citysport/public/api/chaussures/searchidmarque/"+ searchMarque;
 
    document.getElementById('search').value = '';

	 const url__chaussures = async () => {
		datas__chaussures = await fetch(get__marques).then((res) => res.json());
		console.log(datas__chaussures)
	};

grids__chaussures = async () => {
await url__chaussures();

		document.getElementById('resultSearchAll').innerHTML = '';

for (let i = 0; i < datas__chaussures.length; i++) {

	document.getElementById('result').style.display='none';

	if (datas__chaussures.length > 1) {
    
		document.getElementById('resultSearchAll').style.display='flex'; 
	document.getElementById('resultSearch').style.display='none';
		document.getElementById('resultSearchAll').innerHTML += 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center">taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
	}else{

		document.getElementById('resultSearch').style.display='inline';
	document.getElementById('resultSearchAll').style.display='none'; 
		document.getElementById('resultSearch').innerHTML = 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center">taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
	}
 };/*console.clear()*/}; grids__chaussures()


  } else {

    window.location.reload()
 }
})


let selectTaille = document.getElementById('taille')

selectTaille.addEventListener('change', () =>{
	
	searchtaille = selectTaille.options[selectTaille.selectedIndex].innerHTML;
 console.log(searchtaille)
  if (searchtaille && searchtaille !== '') {

	get__tailles="http://localhost/citysport/public/api/chaussures/searchsize/"+ searchtaille;
 
    document.getElementById('search').value = '';

	 const url__chaussures = async () => {
		datas__chaussures = await fetch(get__tailles).then((res) => res.json());
		console.log(datas__chaussures)
	};

grids__chaussures = async () => {
await url__chaussures();

		document.getElementById('resultSearchAll').innerHTML = '';

for (let i = 0; i < datas__chaussures.length; i++) {

	document.getElementById('result').style.display='none';

	if (datas__chaussures.length > 1) {
    
		document.getElementById('resultSearchAll').style.display='flex'; 
	document.getElementById('resultSearch').style.display='none';
		document.getElementById('resultSearchAll').innerHTML += 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center">taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
	}else{

		document.getElementById('resultSearch').style.display='inline';
	document.getElementById('resultSearchAll').style.display='none'; 
		document.getElementById('resultSearch').innerHTML = 
	`
        <div class="item">
            <a href="product_details.php?code=${datas__chaussures[i].idxChaussure}"><div class="cadre"><img src="../assets/img/${datas__chaussures[i].images}" alt="" /></div></a>
            <div class="caption">
                <h5>${datas__chaussures[i].nomChaussure}</h5>
                <p>
                    Description du produit..

                </p>

                <h4 style="text-align:center">taille: ${datas__chaussures[i].taille}<a class="btn-primary" href="#">${datas__chaussures[i].prix} fcfa</a></h4>
            </div>
        </div>

	`
	} 
  };
  /*console.clear()*/}; grids__chaussures()


  } else {

    window.location.reload()
 }

})