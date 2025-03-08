@extends('frontend.layout.master')
@section('content')

<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="./assets/images/pageBannerImage.png" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">Product</p>
        <h1 class="mb-3 display-4 fw-bold">LevroMono 300 g</h1>
        <h4 class="text-dusty-grey fw-normal fs-5">Kevin Levrone Signature Series</h4>
    </div>
</section>

<main>
    <section class="product-page detail my-5">
        <div class="wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-7 mb-4">
                    <img src="./assets/images/productLevroMono.png" alt="Levro Mono" class="img-fluid product-img">
                </div>
                <div class="col-lg-6 col-12 mb-md-0 mb-3">
                    <div class="product-meta">
                        <p class="product-type text-dusty-grey mb-3">
                            Kevin Levrone Signature Series
                        </p>
                        <h1 class="text-white mb-3">
                            LevroMono 300 g
                        </h1>
                        <p class="mb-0 d-flex justify-content-between">
                        <span class="text-warm-grey h3 fw-medium">
                            65 PLN
                        </span>
                            <span class="text-warm-grey h5 fw-light">
                            KL-KLP000036R1.1
                        </span>
                        </p>
                    </div>
                    <hr class="dashed-border">
                    <div class="description-container">
                        <h4 class="text-dusty-grey">Description:</h4>
                        <div class="description text-warm-grey">
                            <p>
                                LevroMono. Food supplement. Supplementing the diet with creatine and beta-glucan,
                                recommended for adults performing high intensity exercise. Creatine increases physical
                                performance in successive bursts of short-term, high intensity exercise, beneficial
                                effect is obtained with a daily intake of 3 g of creatine.
                            </p>
                            <p>
                                Ingredients: Creatine monohydrate, beta-glucan (from barley).
                            </p>
                            <p>
                                Recommended use: Mix ~1 scoop of powder (4,5 g) with 250 ml of water, drink ½ serving
                                before and ½ serving after training.
                            </p>
                            <p>
                                Warnings: Do not use if you are allergic to any of the product compounds. Do not exceed
                                the recommended daily dose. After supplement consumption weight increase may be
                                observed. Food supplements should not be used as a substitute for a varied diet. A
                                varied and balanced diet and a healthy lifestyle are recommended. Do not use if pregnant
                                or nursing. Keep out of reach of young children. Shake the package well before use. This
                                product is sold by weight not volume. Some settling of powder may occur during shipping
                                and handling, which may affect density of powder. This product contains the serving
                                indicated when measured exactly by weight. If you take medications, you should consult
                                your doctor before you consume the product. The measure included in the packet serves to
                                facilitate portioning, but it does not guarantee precise dosing. It is advisable to use
                                scales in order to measure out the exact amount.
                            </p>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Nutrition Value</th>
                                    <th>100 g</th>
                                    <th>30 g</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Energy</td>
                                        <td>1604 kJ / 379 kcal</td>
                                        <td>477 kJ / 113 kcal</td>
                                    </tr>
                                    <tr>
                                        <td>Fat</td>
                                        <td>1604 kJ / 379 kcal</td>
                                        <td>477 kJ / 113 kcal</td>
                                    </tr>
                                    <tr>
                                        <td>of which saturates</td>
                                        <td>1604 kJ / 379 kcal</td>
                                        <td>477 kJ / 113 kcal</td>
                                    </tr>
                                    <tr>
                                        <td>Carbohydrate</td>
                                        <td>1604 kJ / 379 kcal</td>
                                        <td>477 kJ / 113 kcal</td>
                                    </tr>
                                    <tr>
                                        <td>Protein</td>
                                        <td>1604 kJ / 379 kcal</td>
                                        <td>477 kJ / 113 kcal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-products bg-young-night border-bottom border-black">
        <div class="wrapper">
            <h2 class="text-white text-center py-5 mb-0 fw-bold">RELATED PRODUCTS</h2>
            <div class="row pb-5 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="team-card position-relative overflow-hidden bg-white p-3">
    <img src="./assets/images/p1.png" alt="Team card" class="img-fluid">
    <div class="info mx-auto p-3">
        <h4 class="text-white fw-medium">LevroPump 360 g</h4>
        <p class="mb-0 small text-white fw-medium">79 PLN</p>
    </div>
</div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="team-card position-relative overflow-hidden bg-white p-3">
    <img src="./assets/images/p2.png" alt="Team card" class="img-fluid">
    <div class="info mx-auto p-3">
        <h4 class="text-white fw-medium">GOLD GLUTAMINE 300 g</h4>
        <p class="mb-0 small text-white fw-medium">53 PLN</p>
    </div>
</div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="team-card position-relative overflow-hidden bg-white p-3">
    <img src="./assets/images/p3.png" alt="Team card" class="img-fluid">
    <div class="info mx-auto p-3">
        <h4 class="text-white fw-medium">ANABOLIC MASS 7 kg</h4>
        <p class="mb-0 small text-white fw-medium">309 PLN</p>
    </div>
</div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                    <div class="team-card position-relative overflow-hidden bg-white p-3">
    <img src="./assets/images/p4.png" alt="Team card" class="img-fluid">
    <div class="info mx-auto p-3">
        <h4 class="text-white fw-medium">LevroLegendaryMass 3 kg</h4>
        <p class="mb-0 small text-white fw-medium">129 PLN</p>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
