    @extends('layouts.app')

    @section('title', 'サ活投稿詳細')

    @section('content')


        <div class="form-group col-12">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-book"></i>　書籍名</div>
                </div>
                <input disabled class="form-control bg-light" style="font-size:16px" value="{{ $sanavi->item_name }}">
            </div>
        </div>
        <div class="form-group col-12">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-sort-numeric-asc"></i>　購入数</div>
                </div>
                <input disabled class="form-control bg-light" style="font-size:16px"
                    value="{{ $sanavi->item_purchase }}個">
            </div>
        </div>
        <div class="form-group col-12">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-money"></i>　料　金</div>
                </div>
                <input disabled class="form-control bg-light" style="font-size:16px"
                    value="{{ number_format($sanavi->item_amount) }}円">
            </div>
        </div>
        <div class="form-group col-12">
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-calendar-o"></i>　販売日</div>
                </div>
                <input disabled class="form-control bg-light" style="font-size:16px"
                    value="{{ date('Y年m月d日', strtotime($sanavi->published)) }}">
            </div>
        </div>
        <div class="form-group col-12">
            <div class="d-grid gap-2">
                <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-lg">
                    <i class="fa fa-mail-reply"></i>　一覧に戻る
                </a>
            </div>
        </div>


    @endsection
