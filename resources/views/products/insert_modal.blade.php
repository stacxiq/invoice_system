<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content modal-content-demo">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h6 class="modal-title">اضافة منتج </h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_name">اسم المنتج</label>
                            <input type="text" class="form-control" id="product_name" placeholder="اسم المنتج" name="product_name">
                        </div>
                        <div class="form-group">
                            <label for="product_name">
                                القسم
                            </label>
                            <select class="form-control select2" required name="section_id">
                                <option label="اختر قسم">
                                </option>

                                @foreach($sections as $section)
                                    <option value="{{ $section->id }}">
                                        {{ $section->section_name}}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">تفاصيل المنتج </label>
                            <textarea class="form-control" placeholder="تفاصيل المنتج" rows="3" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">حفظ</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>
            </div>


    </div>
</div>
