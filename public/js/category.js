const card = document.getElementById("card-product-placeholder");
const productCard = function(imagePath, price, nameProduct ) {
    return `
            <div class="card product-card col-xs-6 col-sm-4 col-md-4 col-lg-4 px-auto mb-4 mx-2 " style="width: 15rem;">
                <a href="{{ url('/product') }}">
                    <div>
                        <img class="card-img-top" src="file:///home/adeonita/Documentos/uneb/compraCerta/public/images/products/${imagePath}" alt="Imagem de capa do card">
                        <div class='price-tags d-flex flex-column align-items-start'>
                            <p class="badge main">R$ ${price}</p>
                        </div>
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-text">${nameProduct}</p>
                </div>
                <div class="row buttons-product-card">
                    <a href="{{ url('/product') }}" class="btn main main-btn">Comprar</a>               
                </div>
            </div>
    `;
}

$.get("http://localhost/products/1", function(data) {
    data.forEach(element => {
        card.innerHTML = productCard(element.imagePath, element.price, element.name);     
    }); 
});