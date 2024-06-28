</div>
</main>

<!-- View Product Modal -->
<div class="modal" tabindex="-1" role="dialog" id="viewProductModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewProductName"></h5>
                <button type="button" id="closeViewProductModal" class="btn-close btnCloseModal"
                    data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container p-2">
                <div class="d-flex justify-content-center m-2">
                    <img src="" id="viewProductPicture" class="product-image">
                </div>
                <hr>
                <div class="input-container-label-top">
                    <label>Product Description</label>
                    <textarea id="viewProductDescription" class="form-control" readonly></textarea>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-end p-1">
                    <div class="p-0">
                        <div id="viewProductStocks"
                            style="font-size: 13px; border-bottom: 1px solid rgb(158, 158, 158);"
                            class="mb-1 text-success p-1 pb-2">

                        </div>

                        <span id="viewProductPrice" class="p-1" style="border-radius: 5px;"></span>
                    </div>
                    <button class="btn text-light" style="height: 40px; background-color: crimson;"
                        id="btnViewProdAddToCart" data-prodid=""><i class="bi bi-cart-plus-fill"></i> Add To
                        Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of View Product Modal -->

<!-- Delete Cart Item Modal -->
<div class="modal" tabindex="-1" role="dialog" id="deleteCartItemModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCartItemTitle">Delete Item</h5>
                <button type="button" id="closeViewProductModal" class="btn-close btnCloseModal"
                    data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container p-2">
                <h6 class="container mt-3 mb-4" id="deleteCartItemQDisplay">
                    Are you sure you want to delete this product in your cart?
                </h6>
                <hr>
                <div class="d-flex justify-content-end align-items-end p-1">
                    <button class="btn text-light" style="height: 40px; background-color: crimson;"
                        id="btnDeleteCartItem" data-prodid=""><i class="bi bi-trash3-fill"></i> Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Delete Cart Item Modal -->


<!-- Check Out Modal -->
<div class="modal" tabindex="-1" role="dialog" id="PlaceOrderModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="PlaceOrderModalTitle"><i class="bi bi-bag-check-fill"></i> Check Out</h5>
                <button type="button" id="closeViewProductModal" class="btn-close btnCloseModal"
                    data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container p-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="placeOrderItemsContainer">

                    </tbody>
                </table>

                <div class="select-payment-type-container">
                    <div class="input-container-label-top">
                        <label for="checkOutPaymentTypesSelect">Payment Type</label>
                        <select class="form-control" id="checkOutPaymentTypesSelect">

                        </select>
                    </div>
                    <div class="payment-image-container d-flex flex-column align-items-center mt-3">
                        <h5 id="paymentNumberContainer" class="m-3" style="color: crimson;"></h5>
                        <img src="" id="paymentImgContainer">
                        <div class="upload-payment-container">
                            <h6 class="text-success">Please Upload Proof of Payment.</h6>
                            <div class="container card p-2">
                                <span id="popTerms" class="text-danger" style="font-size: 12px">Please ensure that the
                                    proof of payment you submit is accurate and valid. Incorrect or falsified proof of
                                    payment may result in delays or rejection of your transaction.</span>
                                <div class="container d-flex">
                                    <input type="checkbox" class="form-check" id="pofTermsAgree">
                                    <label for="pofAgree" class="m-2 mt-0 mb-0">I Agree</label>
                                </div>
                            </div>
                            <input type="file" name="pof" id="paymentTypeImgInput" accept="image/*"
                                class="form-control mt-2">
                            <img id="imagePreview" src="#" alt="Image Preview">
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-end p-1">
                    <div class="checkout-computation-container" style="width: 100%;">
                        <div class="d-flex justify-content-between">
                            <span>Subtotal:</span>
                            <span>₱ <span id="checkOutSubtotal"></span></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>VAT:</span>
                            <span>₱ <span id="checkOutVat"></span></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Shipping:</span>
                            <span><span id="checkOutShipping"></span></span>
                        </div>
                        <div class="d-flex justify-content-between checkout-total">
                            <span>Total:</span>
                            <span>₱ <span id="checkOutTotal"></span></span>
                        </div>
                    </div>
                    <button class="btn text-light mt-2" style="height: 40px; background-color: crimson;"
                        id="btnPlaceOrder" data-prodid=""><i class="bi bi-bag-check-fill"></i> Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Check Out Modal -->

<!-- Edit Profile Modal -->
<div class="modal" tabindex="-1" role="dialog" id="editProfileModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Edit Profile</h5>
                <button type="button" id="closeEditProductModal" class="btn-close btnCloseModal"
                    data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container p-2">
                <form id="frmEditProfile">
                    <div class="container p-3">
                        <input type="hidden" name="requestType" value="EditUser">
                        <div class="input-container-label-top mt-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="editFName" id="editFName">
                        </div>
                        <div class="input-container-label-top mt-3">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="editLName" id="editLName">
                        </div>
                        <div class="input-container-label-top mt-3">
                            <label>Birthday</label>
                            <input type="date" class="form-control" name="editBday" id="editBday">
                        </div>
                        <div class="input-container-label-top mt-3">
                            <label>Username</label>
                            <input type="text" class="form-control" name="editUsername" id="editUsername">
                        </div>
                        <div class="input-container-label-top mt-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="editEmail" id="editEmail">
                        </div>
                        <div class="input-container-label-top mt-3">
                            <label>Contact #</label>
                            <input type="number" class="form-control" name="editContact" id="editContact">
                        </div>
                        <div class="mt-3">
                            <button type="reset" class="btnCloseModal btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Edit Profile Modal -->


<!-- View Edit Address Modal -->
<div class="modal" tabindex="-1" role="dialog" id="editAddressModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Address</h5>
                <button type="button" id="closeEditAddressModal" class="btn-close btnCloseModal"
                    data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="container p-2" id="frmEditAddress">
                <input type="hidden" id="editAddressAccCode" value="<?= $accCode ?>">
                <input type="hidden" id="userFullName" value="<?= $customerFullname ?>">
                <input type="hidden" id="userEmail" value="<?= $customerEmail ?>">
                <input type="hidden" id="userPhone" value="<?= $customerPhone ?>">

                <div class="input-container-label-top mt-3">
                    <label>Region</label>
                    <select class="form-control" id="regionDropDown" required>
                    </select>
                </div>
                <div class="input-container-label-top mt-3">
                    <label>Province</label>
                    <select class="form-control" id="provinceDropDown" required>
                    </select>
                </div>
                <div class="input-container-label-top mt-3">
                    <label>Municipality</label>
                    <select class="form-control" id="cityDropDown" required>
                    </select>
                </div>
                <div class="input-container-label-top mt-3">
                    <label>Barangay</label>
                    <select class="form-control" id="barangayDropDown" required>
                    </select>
                </div>
                <div class="input-container-label-top mt-3">
                    <label>Street</label>
                    <input type="text" class="form-control" id="streetName" required>
                </div>
                <div class="mt-3">
                    <button type="reset" class="btnCloseModal btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Edit Address Modal -->

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="javascript/app.js"></script>
</body>

</html>