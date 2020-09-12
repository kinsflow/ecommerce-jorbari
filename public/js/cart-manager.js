$(document).ready(function () {
    save_image_to_cart();
    retrieve_for_dom();
    get_sum_of_selected_data();
    handle_clear_local_storage();
    count_cart_item();
})

/**
 * this function listens to the click event of the user to
 * handle the addition of the selected product to cart
 */
const save_image_to_cart = () => {
    $(".product-image").click((e) => {
        let product = (e.target.getAttribute("data-value"))
        let save = store_to_local_storage(product)
        if (save === "OK") {
            swal("Product Added To Cart Successfully")
        }
    })
}

/***
 * this function handles the storing of records to the local storage
 * @param cart_object
 */
const store_to_local_storage = (cart_object) => {
    let raw_cart_pail = localStorage.getItem("cart_payload");

    if (JSON.parse(raw_cart_pail) == null) {
        let cart_pail = [cart_object];
        localStorage.setItem("cart_payload", JSON.stringify(cart_pail));
    } else {
        let fetch_all_in_cart = JSON.parse(raw_cart_pail);
        fetch_all_in_cart.push(cart_object)
        localStorage.setItem("cart_payload", JSON.stringify(fetch_all_in_cart));
    }

    return "OK"
}

/***
 * this function handles the rendition of all data that is in the local storage
 * to the DOM
 */
const retrieve_for_dom = () => {
    let table_body = $("#cart-collections");
    let get_data_from_local_storage = JSON.parse(localStorage.getItem("cart_payload"));

    if (get_data_from_local_storage !== null) {
        get_data_from_local_storage.forEach((each_cart_record) => {
            let parse_object = JSON.parse(each_cart_record);
            let table_row = `<tr>
                                <td class="text-center"><img src="../storage/${parse_object.image}" width="100" style="width: 100px;height: 100px;"/></td>
                                <td class="product-name-cell"><strong>${parse_object.title}</strong></td>
                                <td><strong>N ${parse_object.price}</strong></td>
                            </tr>`

            table_body.append(table_row)
        })
    }
}

/***
 * this function help get the sum total of the prices
 * of all the product that a client must have selected
 */
const get_sum_of_selected_data = () => {
    let get_data_from_local_storage = JSON.parse(localStorage.getItem("cart_payload"));
    let total_sum = 0;

    if (get_data_from_local_storage !== null) {
        for (let i = 0; i < get_data_from_local_storage.length; i++) {
            let parse_object = JSON.parse(get_data_from_local_storage[i]);
            total_sum += parseInt(parse_object.price);
        }
        $(".sum-total").text(`N ${total_sum}`)
    }
    return total_sum;
}

/****
 * this function helps to drop all available cart in the local-storage
 */
const handle_clear_local_storage = () => {
    $("#drop-cart-Btn").click(function () {

        swal({
            title: "Are you sure?",
            text: "you will loose all available data in the cart!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    localStorage.removeItem("cart_payload");
                    let table_body = $("#cart-collections");
                    table_body.empty()
                    swal("Poof! You emptied your cart already!", {
                        icon: "success",
                    });
                } else {
                    swal("Your cart content(s) are safe!");
                }
            });
    })
}


const count_cart_item = () => {
    let fetch_local_storage_item_for_count = JSON.parse(localStorage.getItem("cart_payload"));
    let count = fetch_local_storage_item_for_count.length;
    count > 0 ? $("#cart_count").text(count) : null
}
