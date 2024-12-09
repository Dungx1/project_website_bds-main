<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Update user </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                <li class="breadcrumb-item active">Update user</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="customerList">
                        <div class="card-header border-bottom-dashed">

                            <div class="row g-4 align-items-center">
                                <div class="col-sm">
                                    <div>
                                        <h5 class="card-title mb-0">Thông tin user:</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="index.php?act=updateuser" method="post" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" name="user" class="form-control" id="product-title-input" value="<?php if (isset($user) && ($user != "")) echo $user; ?>" disabled>
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" name="email" class="form-control" id="product-title-input" value="<?php if (isset($email) && ($email != "")) echo $email; ?>" disabled>
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" name="tel" class="form-control" id="product-title-input" value="<?php if (isset($tel) && ($tel != "")) echo $tel; ?>" disabled>
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" name="address" class="form-control" id="product-title-input" value="<?php if (isset($address) && ($address != "")) echo $address; ?>" disabled>
                                            </div>                                                
                                                <select class="form-select" name="id_role" id="choices-category-input" data-choices data-choices-search-false>
                                                    <?php foreach ($listrole as $index => $role) : ?>
                                                        <option name="id_role" value="<?= $role['id_role'] ?>"><?= $role['name_role'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    <td>
                                        <div class="text-end mb-5">
                                            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                                            <input type="submit" name="capnhat" class="btn btn-success w-sm" value="Sửa">


                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                    <input type="button" class="btn btn-success w-sm" value="Xóa"></a>
                                            </li>
                                            <a href="index.php?act=listuser"><button type="button" class="btn btn-success w-sm">Danh sách</button></a>
                                            </ul>
                                    </td>
                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mt-2 text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                            <h4>Are you sure ?</h4>
                                                            <p class="text-muted mx-4 mb-0">Bạn có chắc muốn xóa loại bất động sản này không ?</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Không</button>
                                                        <a href="index.php?act=deleteuser&id=<?php if (isset($id) && ($id > 0)) echo $id; ?>"><button type="button" class="btn w-sm btn-danger" id="delete-record">Cóoooooo!</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </ul>
                                </td>
                                </tr>
                                </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form action="#">
                                    <div class="modal-body">
                                        <input type="hidden" id="id-field" />

                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field1" class="form-label">ID</label>
                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                        </div>

                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Customer Name</label>
                                            <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-field" class="form-label">Email</label>
                                            <input type="email" id="email-field" class="form-control" placeholder="Enter email" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone-field" class="form-label">Phone</label>
                                            <input type="text" id="phone-field" class="form-control" placeholder="Enter phone no." required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="date-field" class="form-label">Joining Date</label>
                                            <input type="date" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" required placeholder="Select date" />
                                        </div>

                                        <div>
                                            <label for="status-field" class="form-label">Status</label>
                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field">
                                                <option value="">Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Block">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                            <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    <!-- end row -->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © HPV
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by HPV
                </div>
            </div>
        </div>
    </div>
</footer>
</div>