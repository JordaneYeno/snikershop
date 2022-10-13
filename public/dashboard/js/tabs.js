let datas__chaussures = [];

const url__chaussures = async () => {
	datas__chaussures = await fetch(
		"http://localhost/citysport/public/api/chaussures/all"
	).then((res) => res.json());
	console.log(datas__chaussures)
};

const url__marques = async () => {
	datas__marques = await fetch(
		"http://localhost/citysport/public/api/marques/all"
	).then((res) => res.json());
	console.log(datas__marques)
};


grids__chaussures = async () => {
    await url__chaussures();
    let autoIncrement=1;
    
    for (let i = 0; i < datas__chaussures.length; i++) {
    
        document.getElementById('responseChaussures').innerHTML += 
        `
                        
            <tr class="tr-shadow">
            <td>${autoIncrement}</td>
            <td class="numMarque" style = "display: none">${datas__chaussures[i].idxMarque}</td>
            <td class="nomChaussure">${datas__chaussures[i].nomChaussure}</td>
            <td>
                <span class="tailleChaussure" class="block-email">${datas__chaussures[i].taille}</span>
            </td>
            <td class="couleurChaussure">${datas__chaussures[i].couleur}</td>
            <td>
                <span class="prixChaussure status--process"> ${datas__chaussures[i].prix}</span>
            </td>
            <td class="imageChaussure">${datas__chaussures[i].images}</td>
            <td>
                <div data-id=${datas__chaussures[i].idxChaussure} class="table-data-feature">
                    <button id="editShoesButton" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button id="delShoesButton" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                    </button>
                </div>
            </td>
            </tr>
            <tr class="spacer"></tr>
    
        `;autoIncrement++
    };/*console.clear()*/}; grids__chaussures()
    

grids__marques = async () => {
    await url__marques();
    let autoIncrement=1;
    
    for (let i = 0; i < datas__marques.length; i++) {
    
        document.getElementById('responseMarques').innerHTML += 
        `
                        
            <tr class="tr-shadow">
            <td>${autoIncrement}</td>
            <td class="nomMarque">${datas__marques[i].marque}</td>
            <td>
                <span class="imageMarque" class="block-email">${datas__marques[i].logo}</span>
            </td>
            <td>
                <div data-id=${datas__marques[i].idxMarque} class="table-data-feature">
                    <button id="editMarksButton" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </button>
                    <button id="delMarksButton" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                    </button>
                </div>
            </td>
            </tr>
            <tr class="spacer"></tr>
    
        `;autoIncrement++
    };/*console.clear()*/}; grids__marques()
 

    
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}