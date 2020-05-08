//CONSTATE PARA IMPRIMIR LOS PRODUCTOS QUE DEVUELVE DEPENDIENDO LA CATEGORIA
const imprimirProductos = (productList) => {
  console.log("printing")
  $(".women-dresses .women-set1").empty()
  $.each(productList, (key, value) => {

    $(".women-dresses .women-set1").append(
      `
						<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s" data-product-key="${value.Id}">
							<a href="single.html"><div class="product-img">
								<img src="${value.Imagen}" alt="" />
								<div class="p-mask">
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls1_item" value="${value.N_Producto}" /> 
										<input type="hidden" name="amount" value="${value.Precio}" /> 
										<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>${value.N_Producto}</h4>
							<h5>${value.Precio}</h5>
						</div>
			            `
    )
  })
}

// CONSULTA A LA BASE DE DATOS POR MEDIO DE AJAX LOS PRODUCTOS DEPENDIENDO SU CATEGORIA


// window.addEventListener("load", function () {
//   // ....
//   var Ids = $('.IdCategoria').id

//   alert(Ids)
// });

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
    url: '../models/AjaxProductsCat.php',
    data: dataS,
    type: 'POST',
    dataType: "json",
    success: function (response) {
      console.log(response);
      imprimirProductos(response);
    }
  });
});