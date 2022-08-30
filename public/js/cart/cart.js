window.onload = function(){

    const boxItems = document.getElementById('produtos');

    let itemsCartStorage = JSON.parse(localStorage.getItem('cartProduct'));
            itemsCartStorage.map((currentElement,index) => {
                let itemsInHtml = 
                `<div class="row bg-light border p-4 mb-3" id="product_${index}">
                    <div class="col-sm-3">
                        <img src="${currentElement.image}" alt="" class="w-100">
                    </div>
                    <div class="col-sm-9 ">
                    <div class="row gap-2">
                        <span class="fs-1 fw-bold">${currentElement.name}</span>
                        <span class="fs-3">${currentElement.price}</span>
                        <div class="d-flex">
                        <label class="fs-5">Quant.</label>
                        <input class="form-control" type="number" name="quant[${index}]" value="${currentElement.quant}" step="1" min="1" max="100" class="border" style="width: 80px">
                        <input type="hidden" name="idProduct[${index}]" value="${currentElement.id}"/>
                        <input type="hidden" name="priceProduct[${index}]" value="${currentElement.price}"/>
                        </div>
                        <div class="col-sm-3">
                        <button type="button" class="btn btn-danger" onclick="removeItemOnCart(${index})">Remover</button>
                        </div>
                    </div>
                    </div>
                </div>`;

                boxItems.innerHTML += itemsInHtml;

            });
}

function removeItemOnCart(index){
    
    let arrayProduct = JSON.parse(localStorage.getItem('cartProduct'));
    arrayProduct.splice(index,1);

    localStorage.setItem('cartProduct',JSON.stringify(arrayProduct));
    
    const itemRemove = document.getElementById(`product_${index}`);
    itemRemove.remove();
    
    
}