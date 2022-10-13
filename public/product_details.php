<?php require_once './write.php' ?>

<?php partial('./','header', ['title' => 'herd']) ?>

    <div class="container global">
        
        <div id="write"></div>
        

    <div class="right">

        <div class="container-panier">
            <div class="quantity" >
                <button class="qty-minus" id="decr">-moins-</button>
                    <input style="text-align: center; font-weight: bolder; font-size: 1rem" id="qte" type="text" class="qty" value="1" >
                <button class="qty-plus" id="incr">+plus+</button>
            </div>
            
            <div class="flex">
                <a href="javascript:void(0)" onclick='crudManager()' id="add" class="btn">Ajoutez au panier</a>
                <a href="http://localhost/citysport/public/" class="continu">Shopping</a>
            </div>  
        </div>

    <script type="text/javascript">
        
        let url='<?php echo $_GET['code'] ?>';
        
        let nombre = document.getElementById('qte')
        let cpt = parseInt(nombre.value);

        document.getElementById('add').addEventListener('click', () => {
            let arrayLocalStorage = document.getElementById('localPanier')
            let panier = localStorage.getItem('panier')
            let panierJson = JSON.parse(panier)
            let arrayStorage = []
            arrayStorage.push(panierJson)
            arrayLocalStorage.innerHTML = (arrayStorage[0].length)
        })

        document.getElementById('incr').addEventListener('click', () => {
                cpt = cpt + 1;
                nombre.value = cpt
        })

        document.getElementById('decr').addEventListener('click', () => {
                cpt = cpt - 1;
                nombre.value = cpt
        })
    </script>

    <script src="./assets-js/js/detail.js"></script>

</body>
</html>