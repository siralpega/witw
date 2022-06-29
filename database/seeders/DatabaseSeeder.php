<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Country seeders. Commented out seeders are territories */
        $this->call([
            \Database\Seeders\Countries\AD_CtrySeeder::class,
            \Database\Seeders\Countries\AE_CtrySeeder::class,
            \Database\Seeders\Countries\AF_CtrySeeder::class,
            \Database\Seeders\Countries\AG_CtrySeeder::class,
            //\Database\Seeders\Countries\AI_CtrySeeder::class,
            \Database\Seeders\Countries\AL_CtrySeeder::class,
            \Database\Seeders\Countries\AM_CtrySeeder::class,
            \Database\Seeders\Countries\AO_CtrySeeder::class,
            \Database\Seeders\Countries\AQ_CtrySeeder::class,
            \Database\Seeders\Countries\AR_CtrySeeder::class,
            \Database\Seeders\Countries\AS_CtrySeeder::class,
            \Database\Seeders\Countries\AT_CtrySeeder::class,
            \Database\Seeders\Countries\AU_CtrySeeder::class,
            \Database\Seeders\Countries\AW_CtrySeeder::class,
            \Database\Seeders\Countries\AZ_CtrySeeder::class,
            \Database\Seeders\Countries\BA_CtrySeeder::class,
            \Database\Seeders\Countries\BB_CtrySeeder::class,
            \Database\Seeders\Countries\BD_CtrySeeder::class,
            \Database\Seeders\Countries\BE_CtrySeeder::class,
            \Database\Seeders\Countries\BF_CtrySeeder::class,
            \Database\Seeders\Countries\BG_CtrySeeder::class,
            \Database\Seeders\Countries\BH_CtrySeeder::class,
            \Database\Seeders\Countries\BI_CtrySeeder::class,
            \Database\Seeders\Countries\BJ_CtrySeeder::class,
            //\Database\Seeders\Countries\BL_CtrySeeder::class,
            //\Database\Seeders\Countries\BM_CtrySeeder::class,
            \Database\Seeders\Countries\BN_CtrySeeder::class,
            \Database\Seeders\Countries\BO_CtrySeeder::class,
            //\Database\Seeders\Countries\BQ_CtrySeeder::class,
            \Database\Seeders\Countries\BR_CtrySeeder::class,
            \Database\Seeders\Countries\BS_CtrySeeder::class,
            \Database\Seeders\Countries\BT_CtrySeeder::class,
            //\Database\Seeders\Countries\BV_CtrySeeder::class,
            \Database\Seeders\Countries\BW_CtrySeeder::class,
            \Database\Seeders\Countries\BY_CtrySeeder::class,
            \Database\Seeders\Countries\BZ_CtrySeeder::class,
            \Database\Seeders\Countries\CA_CtrySeeder::class,
            //\Database\Seeders\Countries\CC_CtrySeeder::class,
            \Database\Seeders\Countries\CD_CtrySeeder::class,
            \Database\Seeders\Countries\CF_CtrySeeder::class,
            \Database\Seeders\Countries\CG_CtrySeeder::class,
            \Database\Seeders\Countries\CH_CtrySeeder::class,
            \Database\Seeders\Countries\CI_CtrySeeder::class,
            //\Database\Seeders\Countries\CK_CtrySeeder::class,
            \Database\Seeders\Countries\CL_CtrySeeder::class,
            \Database\Seeders\Countries\CM_CtrySeeder::class,
            \Database\Seeders\Countries\CN_CtrySeeder::class,
            \Database\Seeders\Countries\CO_CtrySeeder::class,
            \Database\Seeders\Countries\CR_CtrySeeder::class,
            \Database\Seeders\Countries\CU_CtrySeeder::class,
            \Database\Seeders\Countries\CV_CtrySeeder::class,
            //\Database\Seeders\Countries\CX_CtrySeeder::class,
            \Database\Seeders\Countries\CY_CtrySeeder::class,
            \Database\Seeders\Countries\CZ_CtrySeeder::class,
            \Database\Seeders\Countries\DE_CtrySeeder::class,
            \Database\Seeders\Countries\DJ_CtrySeeder::class,
            \Database\Seeders\Countries\DK_CtrySeeder::class,
            \Database\Seeders\Countries\DM_CtrySeeder::class,
            \Database\Seeders\Countries\DO_CtrySeeder::class,
            \Database\Seeders\Countries\DZ_CtrySeeder::class,
            \Database\Seeders\Countries\EC_CtrySeeder::class,
            \Database\Seeders\Countries\EE_CtrySeeder::class,
            \Database\Seeders\Countries\EG_CtrySeeder::class,
            \Database\Seeders\Countries\EH_CtrySeeder::class,
            \Database\Seeders\Countries\ER_CtrySeeder::class,
            \Database\Seeders\Countries\ES_CtrySeeder::class,
            \Database\Seeders\Countries\ET_CtrySeeder::class,
            \Database\Seeders\Countries\FI_CtrySeeder::class,
            \Database\Seeders\Countries\FJ_CtrySeeder::class,
            //\Database\Seeders\Countries\FK_CtrySeeder::class,
            //\Database\Seeders\Countries\FO_CtrySeeder::class,
            \Database\Seeders\Countries\FR_CtrySeeder::class,
            \Database\Seeders\Countries\GA_CtrySeeder::class,
            \Database\Seeders\Countries\GB_CtrySeeder::class,
            \Database\Seeders\Countries\GD_CtrySeeder::class,
            \Database\Seeders\Countries\GE_CtrySeeder::class,
            //\Database\Seeders\Countries\GF_CtrySeeder::class,
            //\Database\Seeders\Countries\GG_CtrySeeder::class,
            \Database\Seeders\Countries\GH_CtrySeeder::class,
            \Database\Seeders\Countries\GI_CtrySeeder::class,
            \Database\Seeders\Countries\GL_CtrySeeder::class,
            \Database\Seeders\Countries\GM_CtrySeeder::class,
            \Database\Seeders\Countries\GN_CtrySeeder::class,
            //\Database\Seeders\Countries\GP_CtrySeeder::class,
            \Database\Seeders\Countries\GQ_CtrySeeder::class,
            \Database\Seeders\Countries\GR_CtrySeeder::class,
            //\Database\Seeders\Countries\GS_CtrySeeder::class,
            \Database\Seeders\Countries\GT_CtrySeeder::class,
            //\Database\Seeders\Countries\GU_CtrySeeder::class,
            \Database\Seeders\Countries\GW_CtrySeeder::class,
            \Database\Seeders\Countries\GY_CtrySeeder::class,
            \Database\Seeders\Countries\HK_CtrySeeder::class,
            //\Database\Seeders\Countries\HM_CtrySeeder::class,
            \Database\Seeders\Countries\HN_CtrySeeder::class,
            \Database\Seeders\Countries\HR_CtrySeeder::class,
            \Database\Seeders\Countries\HT_CtrySeeder::class,
            \Database\Seeders\Countries\HU_CtrySeeder::class,
            \Database\Seeders\Countries\ID_CtrySeeder::class,
            \Database\Seeders\Countries\IE_CtrySeeder::class,
            \Database\Seeders\Countries\IL_CtrySeeder::class,
            //\Database\Seeders\Countries\IM_CtrySeeder::class,
            \Database\Seeders\Countries\IN_CtrySeeder::class,
            //\Database\Seeders\Countries\IO_CtrySeeder::class,
            \Database\Seeders\Countries\IQ_CtrySeeder::class,
            \Database\Seeders\Countries\IR_CtrySeeder::class,
            \Database\Seeders\Countries\IS_CtrySeeder::class,
            \Database\Seeders\Countries\IT_CtrySeeder::class,
            \Database\Seeders\Countries\JM_CtrySeeder::class,
            \Database\Seeders\Countries\JO_CtrySeeder::class,
            \Database\Seeders\Countries\JP_CtrySeeder::class,
            \Database\Seeders\Countries\KE_CtrySeeder::class,
            \Database\Seeders\Countries\KG_CtrySeeder::class,
            \Database\Seeders\Countries\KH_CtrySeeder::class,
            \Database\Seeders\Countries\KI_CtrySeeder::class,
            \Database\Seeders\Countries\KM_CtrySeeder::class,
            \Database\Seeders\Countries\KN_CtrySeeder::class,
            \Database\Seeders\Countries\KP_CtrySeeder::class,
            \Database\Seeders\Countries\KR_CtrySeeder::class,
            \Database\Seeders\Countries\KW_CtrySeeder::class,
            //\Database\Seeders\Countries\KY_CtrySeeder::class,
            \Database\Seeders\Countries\KZ_CtrySeeder::class,
            \Database\Seeders\Countries\LA_CtrySeeder::class,
            \Database\Seeders\Countries\LB_CtrySeeder::class,
            \Database\Seeders\Countries\LC_CtrySeeder::class,
            \Database\Seeders\Countries\LI_CtrySeeder::class,
            \Database\Seeders\Countries\LK_CtrySeeder::class,
            \Database\Seeders\Countries\LR_CtrySeeder::class,
            \Database\Seeders\Countries\LS_CtrySeeder::class,
            \Database\Seeders\Countries\LT_CtrySeeder::class,
            \Database\Seeders\Countries\LU_CtrySeeder::class,
            \Database\Seeders\Countries\LV_CtrySeeder::class,
            \Database\Seeders\Countries\LY_CtrySeeder::class,
            \Database\Seeders\Countries\MA_CtrySeeder::class,
            \Database\Seeders\Countries\MC_CtrySeeder::class,
            \Database\Seeders\Countries\MD_CtrySeeder::class,
            \Database\Seeders\Countries\ME_CtrySeeder::class,
            \Database\Seeders\Countries\MG_CtrySeeder::class,
            \Database\Seeders\Countries\MK_CtrySeeder::class,
            \Database\Seeders\Countries\ML_CtrySeeder::class,
            \Database\Seeders\Countries\MM_CtrySeeder::class,
            \Database\Seeders\Countries\MN_CtrySeeder::class,
            \Database\Seeders\Countries\MO_CtrySeeder::class,
            //\Database\Seeders\Countries\MQ_CtrySeeder::class,
            \Database\Seeders\Countries\MR_CtrySeeder::class,
            //\Database\Seeders\Countries\MS_CtrySeeder::class,
            \Database\Seeders\Countries\MT_CtrySeeder::class,
            \Database\Seeders\Countries\MU_CtrySeeder::class,
            \Database\Seeders\Countries\MV_CtrySeeder::class,
            \Database\Seeders\Countries\MW_CtrySeeder::class,
            \Database\Seeders\Countries\MX_CtrySeeder::class,
            \Database\Seeders\Countries\MY_CtrySeeder::class,
            \Database\Seeders\Countries\MZ_CtrySeeder::class,
            \Database\Seeders\Countries\NA_CtrySeeder::class,
            //\Database\Seeders\Countries\NC_CtrySeeder::class,
            \Database\Seeders\Countries\NE_CtrySeeder::class,
            //\Database\Seeders\Countries\NF_CtrySeeder::class,
            \Database\Seeders\Countries\NG_CtrySeeder::class,
            \Database\Seeders\Countries\NI_CtrySeeder::class,
            \Database\Seeders\Countries\NL_CtrySeeder::class,
            \Database\Seeders\Countries\NO_CtrySeeder::class,
            \Database\Seeders\Countries\NP_CtrySeeder::class,
            \Database\Seeders\Countries\NR_CtrySeeder::class,
            \Database\Seeders\Countries\NU_CtrySeeder::class,
            \Database\Seeders\Countries\NZ_CtrySeeder::class,
            \Database\Seeders\Countries\OM_CtrySeeder::class,
            \Database\Seeders\Countries\PA_CtrySeeder::class,
            \Database\Seeders\Countries\PE_CtrySeeder::class,
            //\Database\Seeders\Countries\PF_CtrySeeder::class,
            \Database\Seeders\Countries\PG_CtrySeeder::class,
            \Database\Seeders\Countries\PH_CtrySeeder::class,
            \Database\Seeders\Countries\PK_CtrySeeder::class,
            \Database\Seeders\Countries\PL_CtrySeeder::class,
            //\Database\Seeders\Countries\PM_CtrySeeder::class,
            //\Database\Seeders\Countries\PN_CtrySeeder::class,
            //\Database\Seeders\Countries\PR_CtrySeeder::class,
            \Database\Seeders\Countries\PT_CtrySeeder::class,
            \Database\Seeders\Countries\PW_CtrySeeder::class,
            \Database\Seeders\Countries\PY_CtrySeeder::class,
            \Database\Seeders\Countries\QA_CtrySeeder::class,
            //\Database\Seeders\Countries\RE_CtrySeeder::class,
            \Database\Seeders\Countries\RO_CtrySeeder::class,
            \Database\Seeders\Countries\RS_CtrySeeder::class,
            \Database\Seeders\Countries\RU_CtrySeeder::class,
            \Database\Seeders\Countries\RW_CtrySeeder::class,
            \Database\Seeders\Countries\SA_CtrySeeder::class,
            \Database\Seeders\Countries\SB_CtrySeeder::class,
            \Database\Seeders\Countries\SC_CtrySeeder::class,
            \Database\Seeders\Countries\SD_CtrySeeder::class,
            \Database\Seeders\Countries\SE_CtrySeeder::class,
            \Database\Seeders\Countries\SG_CtrySeeder::class,
            //\Database\Seeders\Countries\SH_CtrySeeder::class,
            \Database\Seeders\Countries\SI_CtrySeeder::class,
            //\Database\Seeders\Countries\SJ_CtrySeeder::class,
            \Database\Seeders\Countries\SK_CtrySeeder::class,
            \Database\Seeders\Countries\SL_CtrySeeder::class,
            \Database\Seeders\Countries\SM_CtrySeeder::class,
            \Database\Seeders\Countries\SN_CtrySeeder::class,
            \Database\Seeders\Countries\SO_CtrySeeder::class,
            \Database\Seeders\Countries\SR_CtrySeeder::class,
            \Database\Seeders\Countries\ST_CtrySeeder::class,
            \Database\Seeders\Countries\SV_CtrySeeder::class,
            \Database\Seeders\Countries\SY_CtrySeeder::class,
            \Database\Seeders\Countries\SZ_CtrySeeder::class,
            //\Database\Seeders\Countries\TC_CtrySeeder::class,
            \Database\Seeders\Countries\TD_CtrySeeder::class,
            //\Database\Seeders\Countries\TF_CtrySeeder::class,
            \Database\Seeders\Countries\TG_CtrySeeder::class,
            \Database\Seeders\Countries\TH_CtrySeeder::class,
            \Database\Seeders\Countries\TJ_CtrySeeder::class,
            //\Database\Seeders\Countries\TK_CtrySeeder::class,
            \Database\Seeders\Countries\TL_CtrySeeder::class,
            \Database\Seeders\Countries\TM_CtrySeeder::class,
            \Database\Seeders\Countries\TN_CtrySeeder::class,
            \Database\Seeders\Countries\TO_CtrySeeder::class,
            \Database\Seeders\Countries\TR_CtrySeeder::class,
            \Database\Seeders\Countries\TT_CtrySeeder::class,
            \Database\Seeders\Countries\TW_CtrySeeder::class,
            \Database\Seeders\Countries\TZ_CtrySeeder::class,
            \Database\Seeders\Countries\UA_CtrySeeder::class,
            \Database\Seeders\Countries\UG_CtrySeeder::class,
            \Database\Seeders\Countries\US_CtrySeeder::class,
            \Database\Seeders\Countries\UY_CtrySeeder::class,
            \Database\Seeders\Countries\UZ_CtrySeeder::class,
            \Database\Seeders\Countries\VA_CtrySeeder::class,
            \Database\Seeders\Countries\VC_CtrySeeder::class,
            \Database\Seeders\Countries\VE_CtrySeeder::class,
            //\Database\Seeders\Countries\VG_CtrySeeder::class,
            //\Database\Seeders\Countries\VI_CtrySeeder::class,
            \Database\Seeders\Countries\VN_CtrySeeder::class,
            \Database\Seeders\Countries\VU_CtrySeeder::class,
            //\Database\Seeders\Countries\WF_CtrySeeder::class,
            \Database\Seeders\Countries\WS_CtrySeeder::class,
            \Database\Seeders\Countries\YE_CtrySeeder::class,
            //\Database\Seeders\Countries\YT_CtrySeeder::class,
            \Database\Seeders\Countries\ZA_CtrySeeder::class,
            \Database\Seeders\Countries\ZM_CtrySeeder::class,
            \Database\Seeders\Countries\ZW_CtrySeeder::class,
        ]);
    }
}