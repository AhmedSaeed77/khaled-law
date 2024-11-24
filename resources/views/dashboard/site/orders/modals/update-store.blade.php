<!-- Modal -->
<div class="modal fade" id="storeUpdate" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel">@lang('dashboard.Create') @lang('dashboard.appointments')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('updates.store',$order->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputName1">@lang('dashboard.title')</label>
                                <input name="title" required type="text" class="form-control"
                                       id="exampleInputName1"
                                       value="" placeholder="@lang('dashboard.title')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputName1">@lang('dashboard.description')</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputName1">@lang('dashboard.date')</label>
                                <input name="date" required type="date" class="form-control"
                                       id="exampleInputName1"
                                       value="" placeholder="@lang('dashboard.date')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                            data-dismiss="modal">@lang('dashboard.close')</button>
                    <button type="submit"
                            class="btn btn-dark">@lang('dashboard.Create')</button>
                </div>
            </form>
        </div>
    </div>
</div>