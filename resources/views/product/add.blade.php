<form class="row g-3" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label  class="form-label">name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="col-md-4">
        <label for="phone_number" class="form-label">phone_number</label>
        <input type="number" class="form-control" name="phone_number">
    </div>
    <div class="col-6">
        <label for="email" class="form-label">email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="col-4">
        <label for="debut_year" class="form-label">debut_year</label>
        <input type="date" class="form-control" name="debut_year">
    </div>
    <div class="col-md-6">
        <label for="address" class="form-label">address</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="col-md-4">
        <label for="manage" class="form-label">manage</label>
        <input type="number" class="form-control" name="manage">
    </div>
    <div class="col-md-4">
        <label for="status_id" class="form-label">status_id</label>
        <input type="number" class="form-control" name="status_id">
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Them</button>
    </div>
</form>
