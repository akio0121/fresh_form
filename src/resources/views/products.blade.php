<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
</head>

<style>
    svg.w-5.h-5 {
        /*paginateメソッドの矢印の大きさ調整のために追加*/
        width: 30px;
        height: 30px;
    }
</style>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    mogitate
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__link01" href="/register">＋商品を追加</a>
                            <select class="price__item-select">
                                <option value="">価格で並べ替え</option>
                                <option value="">高い順に表示</option>
                                <option value="">安い順に表示</option>
                            </select>
                            <form class="form-inline" method="get" action="/search">
                                @csrf
                                <input type="text" name="searchword" value="{{$searchword ?? ''}}" placeholder="商品名で検索">
                                <button type="submit" class="search-box">検索</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    @foreach($products as $product)
    <div class="product__card">
        <div class=" product__img">
            <form action="/productId" method="get">
                <button type="submit"><img src="/storage/{{$product->image}}" alt="" /></button>
            </form>
        </div>
        <div class="product__name">
            {{$product->name}}
        </div>
        <div class="product__price">
            ￥{{$product->price}}
        </div>
    </div>
    @endforeach
    {{ $products->links() }}
</body>

</html>