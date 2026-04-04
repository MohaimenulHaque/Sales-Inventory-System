@extends('frontend/template')
@section('main_content')

    <div id="content" class="content">
        <div class="container-fluid">
            <main>
                <!-- start content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <h3>Product</h3>
                                    </div>
                                    <hr />
                                    <div class="float-end">
                                        <a href="/ProductSavePage?id=0" class="btn btn-success mx-3 btn-sm">
                                            Add Product
                                        </a>
                                    </div>
                                    <div>
                                        <input placeholder="Search..." class="form-control mb-2 w-auto form-control-sm"
                                            type="text" v-model="searchValue">
                                        <EasyDataTable buttons-pagination alternating :headers="Header" :items="Item"
                                            :rows-per-page="10" :search-field="searchField" :search-value="searchValue">
                                            <template #item-image="{image}" class="pt-2 pb-2">
                                                <img :src="`/images/${image}`" :alt="`image`" alt="" height="40px"
                                                    width="40px">
                                            </template>
                                            <template #item-number="{ id,name }">
                                                <Link class="btn btn-success mx-3 btn-sm"
                                                    :href="`/ProductSavePage?id=${id}`">Edit</Link>
                                                <button class="btn btn-danger btn-sm"
                                                    @click="DeleteClick(id)">Delete</button>
                                            </template>
                                        </EasyDataTable>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content -->
            </main>
        </div>
    </div>

@endsection