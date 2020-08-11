@extends('layouts.admin')
@section('title', 'ZooFind')
@section('javascript')

<script src="{{ secure_asset('js/jquery.inview.min.js') }}" defer></script>
<script src="{{ secure_asset('js/fadein.js') }}" defer></script>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="intro-top">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h2>〜　Animal Introduction　〜</h2>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_right">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_raion.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">ライオン</h1>
                        <p class="intro-text">百獣の王<br>
                        ネコ科では珍しく群れをつくって暮らす動物。群れではオスがなわばりを守り、メスは狩りを行って、オスとメスで役割分担をしています。狩りの仕方も多くのネコ科の動物と違い、仲間と協力して獲物を捕らえます。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_left">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">ジャイアントパンダ</h1>
                        <p class="intro-text">みんな大好きパンダ！（写真はシャンシャンです）<br>
                        野生のパンダは中国南西部の標高1,300m〜3,500mにもなる山岳地帯の森林に生息していると言われています。クマ科の動物ですが、冬眠はしないそうです。主食の竹やササが1年を通して安定して食べられるので、冬眠の必要がないからだそう。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_panda.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_right">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_kirin.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">キリン</h1>
                        <p class="intro-text">首の長さが特徴的！<br>
                        アフリカ大陸のサハラ砂漠より南の開けた木の生えた草原地帯に生息しています。繁殖はほぼ1年中可能で、メスは5歳、オスは3歳くらいから子どもを作ることができます。妊娠期間は約15ヶ月で、子は生まれたときにすでに1.7mから1.8m､体重30㎏から50㎏もあります。草食動物であるキリンですが、広大な草原地帯に生えている草はほとんど食べずに木の葉を主食としています。また、1日のほとんどを食べることに費やすために、夜は2時間から3時間くらいしか眠らないと言われています。寿命は、約20年から25年くらいです。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_left">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">カンガルー（アカカンガルー ）</h1>
                        <p class="intro-text">筋肉ムキムキでキック力がすごい！<br>
                        オーストラリアの内陸部の草原地帯に群れを作って棲んでいます。カンガルーの中で最も大きな種類です。繁殖期は決まっておらず、2㎝程の未熟な状態で生まれてきた仔どもを、母親はおなかの袋の中で6ヶ月間育てます。袋から出た仔は生後1年位までは顔を袋の中に入れて授乳します。太くて長い後ろ肢は、キックと跳躍が可能でジャンプ幅8m､高さ2.5mを超えます。太くて重い尾は跳躍時と後ろ肢で立ち上がった時のバランスをとるのに重要です。雄には袋が無く、仔育てはしません。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_kangaroo.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_right">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_hkkyokuguma.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">ホッキョクグマ</h1>
                        <p class="intro-text">白くて可愛らしさがある！<br>
                        ホッキョクグマは、「哺乳網・食肉目・クマ科」の動物で、北極周辺のアラスカ、グリーンランド、シベリアなどに生息しています。主にアザラシや魚を餌としているため、体のわりに頭が小さく、前足が大きいなど、泳ぐのに適した体をしており、泳ぎや潜水が得意です。また、足の裏にもたくさんの毛が生えていて氷上での生活にも適応しています。餌を求め、ときには流氷にのって何百kmも離れたところまで移動することもあり、日本でも北海道や新潟の海岸に流れ着いたことがあります</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_left">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">コアラ</h1>
                        <p class="intro-text">木登りが得意な癒し系！<br>
                        コアラは夜行性あるいは薄暮性で、巣を作らず樹上で眠る樹上生活動物です。コアラの手足はよく発達し、長く、とがった爪を持ち、枝や幹を登るのに大変便利です。体毛は短く厚く密生し、背面は暗い灰色、腹面は白色から灰白色です。大きく丸い耳には毛がふさ状にはえています。また、コアラの通称としてコアラ・ベアーやネイティブ・ベアーがありますが、クマの仲間ではありません。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_koara.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_right">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_tora.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">トラ（アムールトラ）</h1>
                        <p class="intro-text">鋭い目つきがかっこいい！<br>
                        ネコ科最大の動物。トラの仲間では最も北方に生息しており、中国東北部～シベリアなどのアムール川流域に生息し、別名シベリアトラとも呼ばれています。他のネコ科の動物とは違って水が大好きで、泳ぎが得意です。群れを持たず、単独か親子で生活しています。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro inview_re fadeIn_left">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">クジャク（インドクジャク）</h1>
                        <p class="intro-text">羽の色が美しい！<br>
                        アジアやアフリカ，インド、スリランカ、パキスタン、ネパール周辺の森や畑の近くに住んでいます。１年の大半を小群（一羽のオスに対して複数のメス）あるいは、家族、群で過ごしている。しかし繁殖期になるとオスがけんかっ早くなり、単独ですごすようになります。インドクジャクの子どもは春に生まれます。赤ちゃんは卵で生みます。だいたい卵は３〜５個産みます。卵を28日間あたため続けると、ひながうまれます。子育てはメスだけが行います。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro-img">
                        <img src="{{asset('/images/intro_kujyaku.jpg')}}" class="img-fluid rounded" alt="intro">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection