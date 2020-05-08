//CONSTATE PARA IMPRIMIR LOS PRODUCTOS QUE DEVUELVE DEPENDIENDO LA CATEGORIA
const imprimirDetails = (productList) => {
  console.log("printing")
  $(".products .container").empty()
  $.each(productList, (key, value) => {

    $(".products .container").append(
      `
      <div class="single-page" data-product-key="${value.Id}>
        <div class="single-page-row" id="detail-21">

          <div class="col-md-6 single-top-left">
            <div class="flexslider">
              <ul class="slides">
                <li data-thumb="${value.Imagen}">
                  <div class="thumb-image detail_images"> <img src="${value.Imagen}" data-imagezoom="true"
                      class="img-responsive" alt=""> </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 single-top-right">
            <h3 class="item_name">${value.N_Producto}</h3>
            <p>Tiempo de procesamiento: el artículo se enviará dentro de 2-3 días hábiles. </p>
            <div class="single-rating">
              <ul>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                <li class="rating">20 reseñas</li>
                <li><a href="#">Agrega tu evaluación</a></li>
              </ul>
            </div>
            <div class="single-price">
              <ul>
                <li><spam>$</spam>${value.Precio}</li>
              </ul>
            </div>
            <p class="single-price-text">${value.Descripcion}</p>
            <form action="#" method="post">
              <input type="hidden" name="cmd" value="_cart" />
              <input type="hidden" name="add" value="1" />
              <input type="hidden" name="w3ls1_item" value="${value.N_Producto}" />
              <input type="hidden" name="amount" value="${value.Precio}" />
              <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to
                cart</button>
            </form>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
			`
    )
  })
}


function getParameterByName(name) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var prodId = getParameterByName('Id');
var dataS = 'id=' + prodId;



$(document).ready(function () {
  $.ajax({
    url: '../models/AjaxProductsDetails.php',
    data: dataS,
    type: 'POST',
    dataType: "json",
    success: function (response) {
      console.log(response);
      imprimirDetails(response);
    }
  });
});