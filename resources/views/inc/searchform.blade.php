


<h4><span class="ionicons ion-search"></span> Search of Properties</h4>
{!! Form::open(['action'=>'SearchController@searchResult', 'method'=>'GET', 'enctype' => 'multipart/form-data'])!!}
{{ csrf_field() }}

<div class="form-group text-center">
    <select class="form-group form-control bg-transparent" name="transaction_type"  style="width: 100%;">
        <option style="color: grey;" value="">Transaction Type</option>
        <option value="Sale">Sale</option>
        <option value="Rent">Rent</option>
        <option value="Lease">Lease</option>
    </select>
</div>
<div class="form-group text-center">
    <select class="form-group form-control bg-transparent" name="structure_type"  style="width: 100%;">
        <option style="color: grey;" value="">Structure Type</option>
        <option value="Bungalow">Bungalow</option>
        <option value="Cottage">Cottage</option>
        <option value="Detached">Detached</option>
        <option value="Detached Storey">Detached Storey</option>
        <option value="Farmhouse">Farmhouse</option>
        <option value="Flat">Flat</option>
        <option value="Mansion">Mansion</option>
        <option value="Semi-Detached">Semi-Detached</option>
        <option value="Semi-Detached Storey">Semi-Detached Storey</option>
        <option value="Terraced">Terraced</option>
    </select>
</div>
<div class="form-group text-center">
    <select class="form-group form-control bg-transparent" name="property_type"  style="width: 100%;">
        <option style="color: grey;" value="">Property Type</option>
        <option value="Home">Home</option>
        <option value="Store">Store</option>
        <option value="Office Space">Office Space</option>
        <option value="Land">Land</option>
        <option value="Hostel">Hostel</option>
    </select>
</div>

<div class="form-group text-center">
    {{Form::text('address', '',['class'=>'form-control', 'placeholder'=>'Preferred Location'])}}
</div>
<div class="form-group text-center">
    {{Form::text('description', '',['class'=>'form-control', 'placeholder'=>'Number Of Rooms'])}}
</div>

<div class="form-group text-center">
    {{Form::text('name', '',['class'=>'form-control', 'placeholder'=>'Search By Name'])}}
</div>

<div class="form-group">

    <button type="submit" class="btn btn-primary" style="background: mediumvioletred;">
        {{ __('Search Property') }}
    </button>

</div>
{!! Form::close() !!}