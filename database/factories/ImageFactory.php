<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'path'=> $this->faker->randomElement([
                'https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/316297fac2c54c689ec192e376e79540_9366/gi%C3%A0y-ultraboost-light.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e711a37af3424846b5470558bcd2bcb7_9366/Giay_Ultraboost_Light_Xam_IE1759_01_standard.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/841d520758dc46879a708b4e316e6691_9366/Giay_X_PLR_Boost_Xam_IF2953_01_standard.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/520fd9246c6d439eb1d5a9f0842e4976_9366/Giay_X_PLR_Boost_Hong_IF2954_01_standard.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af6af2de73824e3bbbe435933a357fde_9366/Giay_Chay_Bo_Switch_FWD_mau_xanh_la_IG0676_HM1.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/91fa955f44f54f3bb9f3634bca6ecb5f_9366/GAZELLE_DJo_IE8503_01_standard.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3c43063276d94cbbb23a74dcd292bd3c_9366/Giay_X_PLR_Boost_mau_xanh_la_ID9579_01_standard.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/eb1e2d9fd65242d588bddc35bd66e61e_9366/Giay_X_PLR_Boost_Mau_xanh_da_troi_ID9580_01_standard.jpg',
                'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7477b277ec6647919fa241a78609964a_9366/Giay_Alphaboost_V1_mau_xanh_la_IG3129_01_standard.jpg'
            ]),
        ];
    }
}
