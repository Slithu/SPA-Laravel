<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Treatments;

class TreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatments')->insert([
            'image_path' => 'treatments/hqRzM1olwpFFwqvfBbl7b8YZoFQLpZoo1HqDgp75.jpg',
            'name' => 'Relaxing Massage',
            'typeId' => '1',
            'description' => 'Relaxing massage draws a lot from classical massage techniques. It is a real pleasure for body and soul. Massaging your back and neck allows you to fully relax, forget about everyday life for a while and gain energy so necessary for everyday functioning.',
            'duration' => '00:50:00',
            'price' => '220.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/7dvtrEunq3HZUBdbd2BGUZxFeLXKlOxwy6i6oPx3.jpg',
            'name' => 'Classic Massage',
            'typeId' => '1',
            'description' => 'Classical massage, also called Swedish, is the most commonly used massage. It uses various techniques (stroking, rubbing, kneading, patting, vibration) using the force of pressure on the muscles, using the hands, forearms and elbows. The masseur adjusts the pressure to the needs and preferences of the massaged person. Classic massage relaxes tense muscles, improves blood flow, increases muscle flexibility and range of motion, and reduces pain sensations.',
            'duration' => '00:50:00',
            'price' => '240.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/kosfF83W32UiBWxscSXEuC2mLPQUNnkND2bOySP4.jpg',
            'name' => 'Argan Massage',
            'typeId' => '1',
            'description' => 'Massage with hot argan oil is a treatment that not only relaxes but also nourishes the skin. 100% argan oil has a very strong moisturizing effect, prevents skin aging and improves its elasticity. It is rich in vitamin E. Regularly used argan oil protects the skin against the strong effects of the sun.',
            'duration' => '00:50:00',
            'price' => '250.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/B13jTPXj26CeTCEo7MYfAcfbMxaXNfaLwl92krcH.jpg',
            'name' => 'Hot Chocolate Massage',
            'typeId' => '1',
            'description' => 'Chocolate massage is a real feast for the body and senses. This treatment has a relaxing, but also moisturizing, nourishing, rejuvenating and smoothing effect on the skin. Chocolate also has anti-cellulite properties. It is a rich source of flavonoids that have strong antioxidant properties, i.e. they effectively block the action of free radicals responsible, among others, for skin aging.',
            'duration' => '01:00:00',
            'price' => '280.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/XVoyiSiIfjsfa6yRLYvovvMmMC9dlIxWJiQ7Lpz9.jpg',
            'name' => 'Hot Stones Massage',
            'typeId' => '1',
            'description' => 'Massage with the use of special basalt stones of volcanic origin, which, thanks to their composition, retain heat for a long time. The combination of hot stones with relaxing massage techniques relieves pain in muscles and joints. Massage relieves stress, relaxes and restores the vitality of the whole body',
            'duration' => '01:00:00',
            'price' => '280.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/iCAYjlPEPJ2TmA3CCTONwneCG4s6WV2QVykVEqKP.jpg',
            'name' => 'Hot Candle Massage',
            'typeId' => '1',
            'description' => 'Extremely relaxing massage. It soothes the senses and captivates the body with warmth and a silky touch. It is performed using heated candle oil. The beeswax contained in the candle leaves a silky film on the skin, moisturizes it and restores its elasticity.',
            'duration' => '01:00:00',
            'price' => '280.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/kXXs1m55dGOid1MxdDfM4KHpV1hcUaXENdDoWjNt.jpg',
            'name' => 'ORGANIC SERIES - a treatment selected individually for the needs of the skin',
            'typeId' => '2',
            'description' => 'The treatment is recommended to all those who appreciate relaxation combined with delicate care. Organic Series is non-invasive and suitable for all skin types. A wide range of natural, ecological cosmetics is aimed at specific skin problems - hypoxic, dry or oily skin. The lack of preservatives, dyes and substances responsible for enhancing the fragrance means that the Organic Series treatments can also be used by people prone to skin irritation or allergies.',
            'duration' => '01:00:00',
            'price' => '340.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/mPY82lxEMUD1k2tPiLBZyz9ZSQG02ZMzMAuI3bks.jpg',
            'name' => 'EQUILIBRE PURIFIANT - A normalizing, cleansing and protective treatment that restores the skin balance',
            'typeId' => '2',
            'description' => 'A natural, BIO-certified beauty ritual. Restores balance to normal and oily skin, reduces imperfections, soothes minor inflammations. Two extremely relaxing and effective manual massages combined with the power of natural aromas soothe the senses as well as the body. A unique cocktail of organic active ingredients (including oak bark extract, geranium, niaouli, patchouli and lemon essential oils)',
            'duration' => '01:00:00',
            'price' => '290.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/hUUoetwjPoEDSpyX2EXr96wWIWHtz2nMPNIZIvBw.jpg',
            'name' => 'EQUILIBRE NOURRISSANT - A normalizing, nourishing and protective treatment that restores skin balance',
            'typeId' => '2',
            'description' => 'A highly nourishing and soothing ritual, BIO certified, for normal and dry skin. It combines effective and aromatic care and two manual massages that soothe the senses and the body. Aloe extract, lotus flower, mallow and sandalwood essential oil soothe any irritation. Beeswax and a composition of precious oils, such as sweet almond, sesame and hazelnut oils, nourish the skin.',
            'duration' => '01:00:00',
            'price' => '290.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/BLmTIXRPRwv6GfMJ5aDYsW3hG5lYl7dzG127ih4o.jpg',
            'name' => 'REVIDERM - Illuminating, protective, anti-pollution treatment',
            'typeId' => '2',
            'description' => 'A certified illuminating and protective ritual for grey, earthy skin, exposed to oxidative stress and the harmful effects of external factors such as smog. The ampoules contain a unique cocktail of herbs and extracts, and their effectiveness is guaranteed by a series of manual techniques that stimulate their absorption. Marine oligosaccharide effectively prevents the adhesion of pollution particles, plant chlorophyll and brown algae and pink pepper extract oxygenate the skin and stimulate microcirculation, while vegetable oils, such as hemp or avocado, ensure the proper functioning of the hydrolipid coat',
            'duration' => '01:00:00',
            'price' => '340.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/kCqlyfsC9Z9aUmfCsj8rUHs3TiQV6XrvmyvTdiW4.jpg',
            'name' => 'AQUA PHYTS - A treatment that deeply moisturizes and refreshes the skin',
            'typeId' => '2',
            'description' => 'This deeply moisturizing ritual with a BIO certificate is intended for every skin thirsty for hydration. the pillar of the treatment are aloe vera and hyaluronic acid of low and high molecular weight, which restore the skin proper level of hydration and prevent its re-dehydration. the algae mask soothes and calms any irritation.',
            'duration' => '01:15:00',
            'price' => '370.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/hLXd5qiblLrAuVbq9uTmxYrL2haf0oDosv20mGx4.jpg',
            'name' => 'MULTIVITA - Anti-age, anti-wrinkle, firming treatment, 50+',
            'typeId' => '2',
            'description' => 'A unique, certified ritual dedicated to mature skin, for people who want an immediate effect of tension, lifting and smoothing wrinkles. Among the active phytonutrients with an anti-aging effect, we find Ceveble ceramide complex, wheat germ oil, ginseng extract, acerola, essential oils: sage, thyme and rosemary.',
            'duration' => '01:30:00',
            'price' => '420.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/VpGhuoHsUSlTcmjkL874CVhRiuxI8MfFlbe1pngb.jpg',
            'name' => 'Collagen Relaxation',
            'typeId' => '3',
            'description' => 'A skin requires exceptional care and care. Collagen Relax Ritual is a wealth of natural ingredients contained in cold-pressed oils. Carefully selected massage techniques allow the skin to rest and forget about the worries of everyday life. Collagen salt gently smoothes and tightens the skin, helps drain excess water from the tissues. Vitamins and liquid extracts contained in the oils deeply nourish and moisturize the skin, protecting it from the formation of stretch marks.',
            'duration' => '01:30:00',
            'price' => '360.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/hirdPeXF1abzhapwlJ2eynyGoXMAFIbSPNta3xTv.jpg',
            'name' => 'Aromatic Relaxation',
            'typeId' => '3',
            'description' => 'The "Aromatic relaxation" ritual is a deep regeneration of dry and dehydrated skin. The treatment is based on ready-to-use multi-component products available in 3 fragrance lines: Cranberry, Melon with Cucumber, Orange with Cinnamon. The ritual consists of a whole body peeling and a relaxing massage. The treatment cleanses, regenerates and deeply nourishes the skin. Scrub makes it easier to get rid of dead skin and impurities, and a relaxing massage with shea butter regenerates the body and calms the mind',
            'duration' => '01:30:00',
            'price' => '360.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/RWKOSC9gcmfotbleBuqfFsTZ0tT28EEk9wLY14u4.jpg',
            'name' => 'Coffee-Orange Variation',
            'typeId' => '3',
            'description' => 'A refreshing ritual scented with fresh coffee is an appetizing adventure, after which the skin takes on a youthful appearance. The beneficial properties of coffee are due to the caffeine it contains, effective in the fight against cellulite. This unusual blend of coffee, cardamom, cinnamon and oils is also an irreplaceable source of many valuable ingredients that improve the condition and color of the skin. The appetizing coffee ritual was created to restore vitality and youth to the skin from the very first moment.',
            'duration' => '01:30:00',
            'price' => '360.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/wlSI1PjezbwmXGm5cNw2oaiWTvQZdz9fOlUR40Q1.jpg',
            'name' => 'Icon Anti-Cellulite Ritual',
            'typeId' => '3',
            'description' => 'A therapeutic treatment focused on slimming and body shaping, focused on the most sensitive parts of the body: belly, hips, thighs, buttocks. The secret of the treatment is a unique combination of extracts from four plants: astragalus, butchers broom, lemon and goldenrod. The addition is mud from the Dead Sea. The treatment helps cleanse the body and remove toxins, protects against the formation of cellulite. Recommended for people who want to firm and slim their body',
            'duration' => '01:30:00',
            'price' => '360.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/6MjrBaFBgaYdf4mg5hCkkMoDa5scoee2kF6L1wE0.jpg',
            'name' => 'Ritual For Men',
            'typeId' => '3',
            'description' => 'The treatment is based on peeling with iodine-bromine spa salt with the addition of essential essential oils and nourishing oils that will provide a moment of relaxation and relief. The skin after peeling is smoothed and moisturized. At the end, a classic massage is performed, relaxing tense muscles and intensively releasing tension. The combination of peeling and massage creates a coherent whole and guarantees a feeling of deep relaxation.',
            'duration' => '01:30:00',
            'price' => '360.00'
        ]);

        DB::table('treatments')->insert([
            'image_path' => 'treatments/Ozdp0Nd8BAaVLR1ABTGGWSzX8ImHfbfhn7oiXWZM.jpg',
            'name' => 'Fern Flower - For Two',
            'typeId' => '3',
            'description' => 'FERN FLOWER is a fairy tale related to the Slavic holiday of Kupala, which is a celebration of life and love. The Mokosh ritual for two is a sensual ceremony that will turn common moments into an extraordinary experience of bliss. The treatment begins with a sauna session and tapping with birch twigs. Then we move on to an aromatic peeling based on fragrant plant extracts of bergamot, carnation flowers, jasmine, damask rose, vanilla and thyme. The next stage is a deeply relaxing massage for two on nourishing shea butter with botanical extracts.',
            'duration' => '02:00:00',
            'price' => '840.00'
        ]);
    }
}
