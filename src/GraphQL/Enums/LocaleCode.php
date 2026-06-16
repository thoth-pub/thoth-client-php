<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class LocaleCode
{
    public const EN = 'EN';
    public const AF = 'AF';
    public const AF_NA = 'AF_NA';
    public const AF_ZA = 'AF_ZA';
    public const AGQ = 'AGQ';
    public const AGQ_CM = 'AGQ_CM';
    public const AK = 'AK';
    public const AK_GH = 'AK_GH';
    public const SQ = 'SQ';
    public const SQ_AL = 'SQ_AL';
    public const AM = 'AM';
    public const AM_ET = 'AM_ET';
    public const AIG = 'AIG';
    public const AR = 'AR';
    public const AR_DZ = 'AR_DZ';
    public const AR_BH = 'AR_BH';
    public const AR_EG = 'AR_EG';
    public const AR_IQ = 'AR_IQ';
    public const AR_JO = 'AR_JO';
    public const AR_KW = 'AR_KW';
    public const AR_LB = 'AR_LB';
    public const AR_LY = 'AR_LY';
    public const AR_MA = 'AR_MA';
    public const AR_OM = 'AR_OM';
    public const AR_QA = 'AR_QA';
    public const AR_SA = 'AR_SA';
    public const AR_SD = 'AR_SD';
    public const AR_SY = 'AR_SY';
    public const AR_TN = 'AR_TN';
    public const AR_AE = 'AR_AE';
    public const AR001 = 'AR001';
    public const AR_YE = 'AR_YE';
    public const HY = 'HY';
    public const HY_AM = 'HY_AM';
    public const AS = 'AS';
    public const AS_IN = 'AS_IN';
    public const AST = 'AST';
    public const AST_ES = 'AST_ES';
    public const ASA = 'ASA';
    public const ASA_TZ = 'ASA_TZ';
    public const AZ = 'AZ';
    public const AZ_CYRL = 'AZ_CYRL';
    public const AZ_CYRL_AZ = 'AZ_CYRL_AZ';
    public const AZ_LATN = 'AZ_LATN';
    public const AZ_LATN_AZ = 'AZ_LATN_AZ';
    public const KSF = 'KSF';
    public const KSF_CM = 'KSF_CM';
    public const BAH = 'BAH';
    public const BM = 'BM';
    public const BM_ML = 'BM_ML';
    public const BAS = 'BAS';
    public const BAS_CM = 'BAS_CM';
    public const EU = 'EU';
    public const EU_ES = 'EU_ES';
    public const BE = 'BE';
    public const BE_BY = 'BE_BY';
    public const BEM = 'BEM';
    public const BEM_ZM = 'BEM_ZM';
    public const BEZ = 'BEZ';
    public const BEZ_TZ = 'BEZ_TZ';
    public const BN = 'BN';
    public const BN_BD = 'BN_BD';
    public const BN_IN = 'BN_IN';
    public const BRX = 'BRX';
    public const BRX_IN = 'BRX_IN';
    public const BS = 'BS';
    public const BS_BA = 'BS_BA';
    public const BR = 'BR';
    public const BR_FR = 'BR_FR';
    public const BG = 'BG';
    public const BG_BG = 'BG_BG';
    public const MY = 'MY';
    public const MY_MM = 'MY_MM';
    public const CA = 'CA';
    public const CA_ES = 'CA_ES';
    public const CKB = 'CKB';
    public const KMR = 'KMR';
    public const SDH = 'SDH';
    public const TZM = 'TZM';
    public const TZM_LATN = 'TZM_LATN';
    public const TZM_LATN_MA = 'TZM_LATN_MA';
    public const CHR = 'CHR';
    public const CHR_US = 'CHR_US';
    public const CGG = 'CGG';
    public const CGG_UG = 'CGG_UG';
    public const ZH = 'ZH';
    public const ZH_HANS = 'ZH_HANS';
    public const ZH_CN = 'ZH_CN';
    public const ZH_HANS_CN = 'ZH_HANS_CN';
    public const ZH_HANS_HK = 'ZH_HANS_HK';
    public const ZH_HANS_MO = 'ZH_HANS_MO';
    public const ZH_HANS_SG = 'ZH_HANS_SG';
    public const ZH_HANT = 'ZH_HANT';
    public const ZH_HANT_HK = 'ZH_HANT_HK';
    public const ZH_HANT_MO = 'ZH_HANT_MO';
    public const ZH_HANT_TW = 'ZH_HANT_TW';
    public const SWC = 'SWC';
    public const SWC_CD = 'SWC_CD';
    public const KW = 'KW';
    public const KW_GB = 'KW_GB';
    public const HR = 'HR';
    public const HR_HR = 'HR_HR';
    public const CS = 'CS';
    public const CS_CZ = 'CS_CZ';
    public const DA = 'DA';
    public const DA_DK = 'DA_DK';
    public const DUA = 'DUA';
    public const DUA_CM = 'DUA_CM';
    public const DV = 'DV';
    public const NL = 'NL';
    public const NL_AW = 'NL_AW';
    public const NL_BE = 'NL_BE';
    public const NL_CW = 'NL_CW';
    public const NL_NL = 'NL_NL';
    public const NL_SX = 'NL_SX';
    public const EBU = 'EBU';
    public const EBU_KE = 'EBU_KE';
    public const EN_AI = 'EN_AI';
    public const EN_AS = 'EN_AS';
    public const EN_AU = 'EN_AU';
    public const EN_AT = 'EN_AT';
    public const EN_BB = 'EN_BB';
    public const EN_BE = 'EN_BE';
    public const EN_BZ = 'EN_BZ';
    public const EN_BM = 'EN_BM';
    public const EN_BW = 'EN_BW';
    public const EN_IO = 'EN_IO';
    public const EN_BI = 'EN_BI';
    public const EN_CM = 'EN_CM';
    public const EN_CA = 'EN_CA';
    public const EN_KY = 'EN_KY';
    public const EN_CX = 'EN_CX';
    public const EN_CC = 'EN_CC';
    public const EN_CK = 'EN_CK';
    public const EN_CY = 'EN_CY';
    public const EN_DK = 'EN_DK';
    public const EN_DG = 'EN_DG';
    public const EN_DM = 'EN_DM';
    public const EN_EG = 'EN_EG';
    public const EN_ER = 'EN_ER';
    public const EN_EU = 'EN_EU';
    public const EN_FK = 'EN_FK';
    public const EN_FJ = 'EN_FJ';
    public const EN_FI = 'EN_FI';
    public const EN_GM = 'EN_GM';
    public const EN_DE = 'EN_DE';
    public const EN_GH = 'EN_GH';
    public const EN_GI = 'EN_GI';
    public const EN_GD = 'EN_GD';
    public const EN_GU = 'EN_GU';
    public const EN_GG = 'EN_GG';
    public const EN_GY = 'EN_GY';
    public const EN_HK = 'EN_HK';
    public const EN_IN = 'EN_IN';
    public const EN_IE = 'EN_IE';
    public const EN_IM = 'EN_IM';
    public const EN_IL = 'EN_IL';
    public const EN_JM = 'EN_JM';
    public const EN_JE = 'EN_JE';
    public const EN_KE = 'EN_KE';
    public const EN_KI = 'EN_KI';
    public const EN_KW = 'EN_KW';
    public const EN_LS = 'EN_LS';
    public const EN_MO = 'EN_MO';
    public const EN_MG = 'EN_MG';
    public const EN_MW = 'EN_MW';
    public const EN_MY = 'EN_MY';
    public const EN_MT = 'EN_MT';
    public const EN_MH = 'EN_MH';
    public const EN_MU = 'EN_MU';
    public const EN_FM = 'EN_FM';
    public const EN_MS = 'EN_MS';
    public const EN_NA = 'EN_NA';
    public const EN_NR = 'EN_NR';
    public const EN_NL = 'EN_NL';
    public const EN_NZ = 'EN_NZ';
    public const EN_NG = 'EN_NG';
    public const EN_NU = 'EN_NU';
    public const EN_NF = 'EN_NF';
    public const EN_MP = 'EN_MP';
    public const EN_NO = 'EN_NO';
    public const EN_PA = 'EN_PA';
    public const EN_PK = 'EN_PK';
    public const EN_PW = 'EN_PW';
    public const EN_PG = 'EN_PG';
    public const EN_PH = 'EN_PH';
    public const EN_PN = 'EN_PN';
    public const EN_PR = 'EN_PR';
    public const EN_RW = 'EN_RW';
    public const EN_WS = 'EN_WS';
    public const EN_SA = 'EN_SA';
    public const EN_SC = 'EN_SC';
    public const EN_SL = 'EN_SL';
    public const EN_SG = 'EN_SG';
    public const EN_SX = 'EN_SX';
    public const EN_SI = 'EN_SI';
    public const EN_SB = 'EN_SB';
    public const EN_SS = 'EN_SS';
    public const EN_SH = 'EN_SH';
    public const EN_KN = 'EN_KN';
    public const EN_LC = 'EN_LC';
    public const SVC = 'SVC';
    public const VIC = 'VIC';
    public const EN_SD = 'EN_SD';
    public const EN_SZ = 'EN_SZ';
    public const EN_SE = 'EN_SE';
    public const EN_CH = 'EN_CH';
    public const EN_TZ = 'EN_TZ';
    public const EN_TK = 'EN_TK';
    public const EN_TO = 'EN_TO';
    public const EN_TT = 'EN_TT';
    public const EN_TV = 'EN_TV';
    public const EN_ZA = 'EN_ZA';
    public const EN_AE = 'EN_AE';
    public const EN_UM = 'EN_UM';
    public const EN_VI = 'EN_VI';
    public const EN_US_POSIX = 'EN_US_POSIX';
    public const EN_UG = 'EN_UG';
    public const EN_GB = 'EN_GB';
    public const EN_US = 'EN_US';
    public const EN_VU = 'EN_VU';
    public const EN_ZM = 'EN_ZM';
    public const EN_ZW = 'EN_ZW';
    public const EO = 'EO';
    public const ET = 'ET';
    public const ET_EE = 'ET_EE';
    public const EE = 'EE';
    public const EE_GH = 'EE_GH';
    public const EE_TG = 'EE_TG';
    public const EWO = 'EWO';
    public const EWO_CM = 'EWO_CM';
    public const FO = 'FO';
    public const FO_FO = 'FO_FO';
    public const FIL = 'FIL';
    public const FIL_PH = 'FIL_PH';
    public const FI = 'FI';
    public const FI_FI = 'FI_FI';
    public const FR = 'FR';
    public const FR_BE = 'FR_BE';
    public const FR_BJ = 'FR_BJ';
    public const FR_BF = 'FR_BF';
    public const FR_BI = 'FR_BI';
    public const FR_CM = 'FR_CM';
    public const FR_CA = 'FR_CA';
    public const FR_CF = 'FR_CF';
    public const FR_TD = 'FR_TD';
    public const FR_KM = 'FR_KM';
    public const FR_CG = 'FR_CG';
    public const FR_CD = 'FR_CD';
    public const FR_CI = 'FR_CI';
    public const FR_DJ = 'FR_DJ';
    public const FR_GQ = 'FR_GQ';
    public const FR_FR = 'FR_FR';
    public const FR_GF = 'FR_GF';
    public const FR_GA = 'FR_GA';
    public const FR_GP = 'FR_GP';
    public const FR_GN = 'FR_GN';
    public const FR_LU = 'FR_LU';
    public const FR_MG = 'FR_MG';
    public const FR_ML = 'FR_ML';
    public const FR_MQ = 'FR_MQ';
    public const FR_YT = 'FR_YT';
    public const FR_MC = 'FR_MC';
    public const FR_NE = 'FR_NE';
    public const FR_RW = 'FR_RW';
    public const FR_RE = 'FR_RE';
    public const FR_BL = 'FR_BL';
    public const FR_MF = 'FR_MF';
    public const FR_MU = 'FR_MU';
    public const FR_SN = 'FR_SN';
    public const FR_CH = 'FR_CH';
    public const FR_TG = 'FR_TG';
    public const FF = 'FF';
    public const FF_SN = 'FF_SN';
    public const GL = 'GL';
    public const GL_ES = 'GL_ES';
    public const LAO = 'LAO';
    public const LG = 'LG';
    public const LG_UG = 'LG_UG';
    public const KA = 'KA';
    public const KA_GE = 'KA_GE';
    public const DE = 'DE';
    public const DE_AT = 'DE_AT';
    public const DE_BE = 'DE_BE';
    public const DE_DE = 'DE_DE';
    public const DE_LI = 'DE_LI';
    public const DE_LU = 'DE_LU';
    public const DE_CH = 'DE_CH';
    public const EL = 'EL';
    public const EL_CY = 'EL_CY';
    public const EL_GR = 'EL_GR';
    public const GU = 'GU';
    public const GU_IN = 'GU_IN';
    public const GUZ = 'GUZ';
    public const GUZ_KE = 'GUZ_KE';
    public const HA = 'HA';
    public const HA_LATN = 'HA_LATN';
    public const HA_LATN_GH = 'HA_LATN_GH';
    public const HA_LATN_NE = 'HA_LATN_NE';
    public const HA_LATN_NG = 'HA_LATN_NG';
    public const HAW = 'HAW';
    public const HAW_US = 'HAW_US';
    public const HE = 'HE';
    public const HE_IL = 'HE_IL';
    public const HI = 'HI';
    public const HI_IN = 'HI_IN';
    public const HU = 'HU';
    public const HU_HU = 'HU_HU';
    public const IS = 'IS';
    public const IS_IS = 'IS_IS';
    public const IG = 'IG';
    public const IG_NG = 'IG_NG';
    public const SMN = 'SMN';
    public const SMN_FI = 'SMN_FI';
    public const ID = 'ID';
    public const ID_ID = 'ID_ID';
    public const GA = 'GA';
    public const GA_IE = 'GA_IE';
    public const IT = 'IT';
    public const IT_IT = 'IT_IT';
    public const IT_CH = 'IT_CH';
    public const JA = 'JA';
    public const JA_JP = 'JA_JP';
    public const DYO = 'DYO';
    public const DYO_SN = 'DYO_SN';
    public const KEA = 'KEA';
    public const KEA_CV = 'KEA_CV';
    public const KAB = 'KAB';
    public const KAB_DZ = 'KAB_DZ';
    public const KL = 'KL';
    public const KL_GL = 'KL_GL';
    public const KLN = 'KLN';
    public const KLN_KE = 'KLN_KE';
    public const KAM = 'KAM';
    public const KAM_KE = 'KAM_KE';
    public const KN = 'KN';
    public const KN_IN = 'KN_IN';
    public const KAA = 'KAA';
    public const KK = 'KK';
    public const KK_CYRL = 'KK_CYRL';
    public const KK_CYRL_KZ = 'KK_CYRL_KZ';
    public const KM = 'KM';
    public const KM_KH = 'KM_KH';
    public const KI = 'KI';
    public const KI_KE = 'KI_KE';
    public const RW = 'RW';
    public const RW_RW = 'RW_RW';
    public const KOK = 'KOK';
    public const KOK_IN = 'KOK_IN';
    public const KO = 'KO';
    public const KO_KR = 'KO_KR';
    public const KHQ = 'KHQ';
    public const KHQ_ML = 'KHQ_ML';
    public const SES = 'SES';
    public const SES_ML = 'SES_ML';
    public const NMG = 'NMG';
    public const NMG_CM = 'NMG_CM';
    public const KY = 'KY';
    public const LAG = 'LAG';
    public const LAG_TZ = 'LAG_TZ';
    public const LV = 'LV';
    public const LV_LV = 'LV_LV';
    public const LIR = 'LIR';
    public const LN = 'LN';
    public const LN_CG = 'LN_CG';
    public const LN_CD = 'LN_CD';
    public const LT = 'LT';
    public const LT_LT = 'LT_LT';
    public const LU = 'LU';
    public const LU_CD = 'LU_CD';
    public const LUO = 'LUO';
    public const LUO_KE = 'LUO_KE';
    public const LUY = 'LUY';
    public const LUY_KE = 'LUY_KE';
    public const MK = 'MK';
    public const MK_MK = 'MK_MK';
    public const JMC = 'JMC';
    public const JMC_TZ = 'JMC_TZ';
    public const MGH = 'MGH';
    public const MGH_MZ = 'MGH_MZ';
    public const KDE = 'KDE';
    public const KDE_TZ = 'KDE_TZ';
    public const MG = 'MG';
    public const MG_MG = 'MG_MG';
    public const MS = 'MS';
    public const MS_BN = 'MS_BN';
    public const MS_MY = 'MS_MY';
    public const ML = 'ML';
    public const ML_IN = 'ML_IN';
    public const MT = 'MT';
    public const MT_MT = 'MT_MT';
    public const GV = 'GV';
    public const GV_GB = 'GV_GB';
    public const MR = 'MR';
    public const MR_IN = 'MR_IN';
    public const MAS = 'MAS';
    public const MAS_KE = 'MAS_KE';
    public const MAS_TZ = 'MAS_TZ';
    public const MER = 'MER';
    public const MER_KE = 'MER_KE';
    public const MN = 'MN';
    public const MFE = 'MFE';
    public const MFE_MU = 'MFE_MU';
    public const MUA = 'MUA';
    public const MUA_CM = 'MUA_CM';
    public const NAQ = 'NAQ';
    public const NAQ_NA = 'NAQ_NA';
    public const NE = 'NE';
    public const NE_IN = 'NE_IN';
    public const NE_NP = 'NE_NP';
    public const SE = 'SE';
    public const SE_FI = 'SE_FI';
    public const SE_NO = 'SE_NO';
    public const SE_SE = 'SE_SE';
    public const ND = 'ND';
    public const ND_ZW = 'ND_ZW';
    public const NB = 'NB';
    public const NB_NO = 'NB_NO';
    public const NN = 'NN';
    public const NN_NO = 'NN_NO';
    public const NUS = 'NUS';
    public const NUS_SD = 'NUS_SD';
    public const NYN = 'NYN';
    public const NYN_UG = 'NYN_UG';
    public const OR = 'OR';
    public const OR_IN = 'OR_IN';
    public const OM = 'OM';
    public const OM_ET = 'OM_ET';
    public const OM_KE = 'OM_KE';
    public const PS = 'PS';
    public const PS_AF = 'PS_AF';
    public const FA = 'FA';
    public const FA_AF = 'FA_AF';
    public const FA_IR = 'FA_IR';
    public const PL = 'PL';
    public const PL_PL = 'PL_PL';
    public const PT = 'PT';
    public const PT_AO = 'PT_AO';
    public const PT_BR = 'PT_BR';
    public const PT_GW = 'PT_GW';
    public const PT_MZ = 'PT_MZ';
    public const PT_PT = 'PT_PT';
    public const PT_ST = 'PT_ST';
    public const PA = 'PA';
    public const PA_ARAB = 'PA_ARAB';
    public const PA_ARAB_PK = 'PA_ARAB_PK';
    public const PA_GURU = 'PA_GURU';
    public const PA_GURU_IN = 'PA_GURU_IN';
    public const RO = 'RO';
    public const RO_MD = 'RO_MD';
    public const RO_RO = 'RO_RO';
    public const RM = 'RM';
    public const RM_CH = 'RM_CH';
    public const ROF = 'ROF';
    public const ROF_TZ = 'ROF_TZ';
    public const RN = 'RN';
    public const RN_BI = 'RN_BI';
    public const RU = 'RU';
    public const RU_MD = 'RU_MD';
    public const RU_RU = 'RU_RU';
    public const RU_UA = 'RU_UA';
    public const RWK = 'RWK';
    public const RWK_TZ = 'RWK_TZ';
    public const SAQ = 'SAQ';
    public const SAQ_KE = 'SAQ_KE';
    public const SG = 'SG';
    public const SG_CF = 'SG_CF';
    public const SBP = 'SBP';
    public const SBP_TZ = 'SBP_TZ';
    public const SA = 'SA';
    public const GD = 'GD';
    public const GD_GB = 'GD_GB';
    public const SEH = 'SEH';
    public const SEH_MZ = 'SEH_MZ';
    public const SR = 'SR';
    public const SR_CYRL = 'SR_CYRL';
    public const SR_CYRL_BA = 'SR_CYRL_BA';
    public const SR_CYRL_ME = 'SR_CYRL_ME';
    public const SR_CYRL_RS = 'SR_CYRL_RS';
    public const SR_LATN = 'SR_LATN';
    public const SR_LATN_BA = 'SR_LATN_BA';
    public const SR_LATN_ME = 'SR_LATN_ME';
    public const SR_LATN_RS = 'SR_LATN_RS';
    public const KSB = 'KSB';
    public const KSB_TZ = 'KSB_TZ';
    public const SN = 'SN';
    public const SN_ZW = 'SN_ZW';
    public const II = 'II';
    public const II_CN = 'II_CN';
    public const SI = 'SI';
    public const SI_LK = 'SI_LK';
    public const SK = 'SK';
    public const SK_SK = 'SK_SK';
    public const SL = 'SL';
    public const SL_SI = 'SL_SI';
    public const XOG = 'XOG';
    public const XOG_UG = 'XOG_UG';
    public const SO = 'SO';
    public const SO_DJ = 'SO_DJ';
    public const SO_ET = 'SO_ET';
    public const SO_KE = 'SO_KE';
    public const SO_SO = 'SO_SO';
    public const ES = 'ES';
    public const ES_AR = 'ES_AR';
    public const ES_BO = 'ES_BO';
    public const ES_CL = 'ES_CL';
    public const ES_CO = 'ES_CO';
    public const ES_CR = 'ES_CR';
    public const ES_DO = 'ES_DO';
    public const ES_EC = 'ES_EC';
    public const ES_SV = 'ES_SV';
    public const ES_GQ = 'ES_GQ';
    public const ES_GT = 'ES_GT';
    public const ES_HN = 'ES_HN';
    public const ES419 = 'ES419';
    public const ES_MX = 'ES_MX';
    public const ES_NI = 'ES_NI';
    public const ES_PA = 'ES_PA';
    public const ES_PY = 'ES_PY';
    public const ES_PE = 'ES_PE';
    public const ES_PR = 'ES_PR';
    public const ES_ES = 'ES_ES';
    public const ES_US = 'ES_US';
    public const ES_UY = 'ES_UY';
    public const ES_VE = 'ES_VE';
    public const SW = 'SW';
    public const SW_KE = 'SW_KE';
    public const SW_TZ = 'SW_TZ';
    public const SV = 'SV';
    public const SV_FI = 'SV_FI';
    public const SV_SE = 'SV_SE';
    public const GSW = 'GSW';
    public const GSW_CH = 'GSW_CH';
    public const SHI = 'SHI';
    public const SHI_LATN = 'SHI_LATN';
    public const SHI_LATN_MA = 'SHI_LATN_MA';
    public const SHI_TFNG = 'SHI_TFNG';
    public const SHI_TFNG_MA = 'SHI_TFNG_MA';
    public const DAV = 'DAV';
    public const DAV_KE = 'DAV_KE';
    public const TG = 'TG';
    public const TA = 'TA';
    public const TA_IN = 'TA_IN';
    public const TA_LK = 'TA_LK';
    public const TWQ = 'TWQ';
    public const TWQ_NE = 'TWQ_NE';
    public const MI = 'MI';
    public const TE = 'TE';
    public const TE_IN = 'TE_IN';
    public const TEO = 'TEO';
    public const TEO_KE = 'TEO_KE';
    public const TEO_UG = 'TEO_UG';
    public const TH = 'TH';
    public const TH_TH = 'TH_TH';
    public const BO = 'BO';
    public const BO_CN = 'BO_CN';
    public const BO_IN = 'BO_IN';
    public const TI = 'TI';
    public const TI_ER = 'TI_ER';
    public const TI_ET = 'TI_ET';
    public const TO = 'TO';
    public const TO_TO = 'TO_TO';
    public const TR = 'TR';
    public const TK = 'TK';
    public const TR_TR = 'TR_TR';
    public const TCH = 'TCH';
    public const UK = 'UK';
    public const UK_UA = 'UK_UA';
    public const UR = 'UR';
    public const UR_IN = 'UR_IN';
    public const UR_PK = 'UR_PK';
    public const UG = 'UG';
    public const UG_CN = 'UG_CN';
    public const UZ = 'UZ';
    public const UZ_ARAB = 'UZ_ARAB';
    public const UZ_ARAB_AF = 'UZ_ARAB_AF';
    public const UZ_CYRL = 'UZ_CYRL';
    public const UZ_CYRL_UZ = 'UZ_CYRL_UZ';
    public const UZ_LATN = 'UZ_LATN';
    public const UZ_LATN_UZ = 'UZ_LATN_UZ';
    public const VAI = 'VAI';
    public const VAI_LATN = 'VAI_LATN';
    public const VAI_LATN_LR = 'VAI_LATN_LR';
    public const VAI_VAII = 'VAI_VAII';
    public const VAI_VAII_LR = 'VAI_VAII_LR';
    public const VAL = 'VAL';
    public const VAL_ES = 'VAL_ES';
    public const CA_ES_VALENCIA = 'CA_ES_VALENCIA';
    public const VE = 'VE';
    public const VE_ZA = 'VE_ZA';
    public const VI = 'VI';
    public const VI_VN = 'VI_VN';
    public const VUN = 'VUN';
    public const VUN_TZ = 'VUN_TZ';
    public const CY = 'CY';
    public const CY_GB = 'CY_GB';
    public const WO = 'WO';
    public const XH = 'XH';
    public const YAV = 'YAV';
    public const YAV_CM = 'YAV_CM';
    public const YO = 'YO';
    public const YO_NG = 'YO_NG';
    public const DJE = 'DJE';
    public const DJE_NE = 'DJE_NE';
    public const ZU = 'ZU';
    public const ZU_ZA = 'ZU_ZA';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('LocaleCode', [
            'EN',
            'AF',
            'AF_NA',
            'AF_ZA',
            'AGQ',
            'AGQ_CM',
            'AK',
            'AK_GH',
            'SQ',
            'SQ_AL',
            'AM',
            'AM_ET',
            'AIG',
            'AR',
            'AR_DZ',
            'AR_BH',
            'AR_EG',
            'AR_IQ',
            'AR_JO',
            'AR_KW',
            'AR_LB',
            'AR_LY',
            'AR_MA',
            'AR_OM',
            'AR_QA',
            'AR_SA',
            'AR_SD',
            'AR_SY',
            'AR_TN',
            'AR_AE',
            'AR001',
            'AR_YE',
            'HY',
            'HY_AM',
            'AS',
            'AS_IN',
            'AST',
            'AST_ES',
            'ASA',
            'ASA_TZ',
            'AZ',
            'AZ_CYRL',
            'AZ_CYRL_AZ',
            'AZ_LATN',
            'AZ_LATN_AZ',
            'KSF',
            'KSF_CM',
            'BAH',
            'BM',
            'BM_ML',
            'BAS',
            'BAS_CM',
            'EU',
            'EU_ES',
            'BE',
            'BE_BY',
            'BEM',
            'BEM_ZM',
            'BEZ',
            'BEZ_TZ',
            'BN',
            'BN_BD',
            'BN_IN',
            'BRX',
            'BRX_IN',
            'BS',
            'BS_BA',
            'BR',
            'BR_FR',
            'BG',
            'BG_BG',
            'MY',
            'MY_MM',
            'CA',
            'CA_ES',
            'CKB',
            'KMR',
            'SDH',
            'TZM',
            'TZM_LATN',
            'TZM_LATN_MA',
            'CHR',
            'CHR_US',
            'CGG',
            'CGG_UG',
            'ZH',
            'ZH_HANS',
            'ZH_CN',
            'ZH_HANS_CN',
            'ZH_HANS_HK',
            'ZH_HANS_MO',
            'ZH_HANS_SG',
            'ZH_HANT',
            'ZH_HANT_HK',
            'ZH_HANT_MO',
            'ZH_HANT_TW',
            'SWC',
            'SWC_CD',
            'KW',
            'KW_GB',
            'HR',
            'HR_HR',
            'CS',
            'CS_CZ',
            'DA',
            'DA_DK',
            'DUA',
            'DUA_CM',
            'DV',
            'NL',
            'NL_AW',
            'NL_BE',
            'NL_CW',
            'NL_NL',
            'NL_SX',
            'EBU',
            'EBU_KE',
            'EN_AI',
            'EN_AS',
            'EN_AU',
            'EN_AT',
            'EN_BB',
            'EN_BE',
            'EN_BZ',
            'EN_BM',
            'EN_BW',
            'EN_IO',
            'EN_BI',
            'EN_CM',
            'EN_CA',
            'EN_KY',
            'EN_CX',
            'EN_CC',
            'EN_CK',
            'EN_CY',
            'EN_DK',
            'EN_DG',
            'EN_DM',
            'EN_EG',
            'EN_ER',
            'EN_EU',
            'EN_FK',
            'EN_FJ',
            'EN_FI',
            'EN_GM',
            'EN_DE',
            'EN_GH',
            'EN_GI',
            'EN_GD',
            'EN_GU',
            'EN_GG',
            'EN_GY',
            'EN_HK',
            'EN_IN',
            'EN_IE',
            'EN_IM',
            'EN_IL',
            'EN_JM',
            'EN_JE',
            'EN_KE',
            'EN_KI',
            'EN_KW',
            'EN_LS',
            'EN_MO',
            'EN_MG',
            'EN_MW',
            'EN_MY',
            'EN_MT',
            'EN_MH',
            'EN_MU',
            'EN_FM',
            'EN_MS',
            'EN_NA',
            'EN_NR',
            'EN_NL',
            'EN_NZ',
            'EN_NG',
            'EN_NU',
            'EN_NF',
            'EN_MP',
            'EN_NO',
            'EN_PA',
            'EN_PK',
            'EN_PW',
            'EN_PG',
            'EN_PH',
            'EN_PN',
            'EN_PR',
            'EN_RW',
            'EN_WS',
            'EN_SA',
            'EN_SC',
            'EN_SL',
            'EN_SG',
            'EN_SX',
            'EN_SI',
            'EN_SB',
            'EN_SS',
            'EN_SH',
            'EN_KN',
            'EN_LC',
            'SVC',
            'VIC',
            'EN_SD',
            'EN_SZ',
            'EN_SE',
            'EN_CH',
            'EN_TZ',
            'EN_TK',
            'EN_TO',
            'EN_TT',
            'EN_TV',
            'EN_ZA',
            'EN_AE',
            'EN_UM',
            'EN_VI',
            'EN_US_POSIX',
            'EN_UG',
            'EN_GB',
            'EN_US',
            'EN_VU',
            'EN_ZM',
            'EN_ZW',
            'EO',
            'ET',
            'ET_EE',
            'EE',
            'EE_GH',
            'EE_TG',
            'EWO',
            'EWO_CM',
            'FO',
            'FO_FO',
            'FIL',
            'FIL_PH',
            'FI',
            'FI_FI',
            'FR',
            'FR_BE',
            'FR_BJ',
            'FR_BF',
            'FR_BI',
            'FR_CM',
            'FR_CA',
            'FR_CF',
            'FR_TD',
            'FR_KM',
            'FR_CG',
            'FR_CD',
            'FR_CI',
            'FR_DJ',
            'FR_GQ',
            'FR_FR',
            'FR_GF',
            'FR_GA',
            'FR_GP',
            'FR_GN',
            'FR_LU',
            'FR_MG',
            'FR_ML',
            'FR_MQ',
            'FR_YT',
            'FR_MC',
            'FR_NE',
            'FR_RW',
            'FR_RE',
            'FR_BL',
            'FR_MF',
            'FR_MU',
            'FR_SN',
            'FR_CH',
            'FR_TG',
            'FF',
            'FF_SN',
            'GL',
            'GL_ES',
            'LAO',
            'LG',
            'LG_UG',
            'KA',
            'KA_GE',
            'DE',
            'DE_AT',
            'DE_BE',
            'DE_DE',
            'DE_LI',
            'DE_LU',
            'DE_CH',
            'EL',
            'EL_CY',
            'EL_GR',
            'GU',
            'GU_IN',
            'GUZ',
            'GUZ_KE',
            'HA',
            'HA_LATN',
            'HA_LATN_GH',
            'HA_LATN_NE',
            'HA_LATN_NG',
            'HAW',
            'HAW_US',
            'HE',
            'HE_IL',
            'HI',
            'HI_IN',
            'HU',
            'HU_HU',
            'IS',
            'IS_IS',
            'IG',
            'IG_NG',
            'SMN',
            'SMN_FI',
            'ID',
            'ID_ID',
            'GA',
            'GA_IE',
            'IT',
            'IT_IT',
            'IT_CH',
            'JA',
            'JA_JP',
            'DYO',
            'DYO_SN',
            'KEA',
            'KEA_CV',
            'KAB',
            'KAB_DZ',
            'KL',
            'KL_GL',
            'KLN',
            'KLN_KE',
            'KAM',
            'KAM_KE',
            'KN',
            'KN_IN',
            'KAA',
            'KK',
            'KK_CYRL',
            'KK_CYRL_KZ',
            'KM',
            'KM_KH',
            'KI',
            'KI_KE',
            'RW',
            'RW_RW',
            'KOK',
            'KOK_IN',
            'KO',
            'KO_KR',
            'KHQ',
            'KHQ_ML',
            'SES',
            'SES_ML',
            'NMG',
            'NMG_CM',
            'KY',
            'LAG',
            'LAG_TZ',
            'LV',
            'LV_LV',
            'LIR',
            'LN',
            'LN_CG',
            'LN_CD',
            'LT',
            'LT_LT',
            'LU',
            'LU_CD',
            'LUO',
            'LUO_KE',
            'LUY',
            'LUY_KE',
            'MK',
            'MK_MK',
            'JMC',
            'JMC_TZ',
            'MGH',
            'MGH_MZ',
            'KDE',
            'KDE_TZ',
            'MG',
            'MG_MG',
            'MS',
            'MS_BN',
            'MS_MY',
            'ML',
            'ML_IN',
            'MT',
            'MT_MT',
            'GV',
            'GV_GB',
            'MR',
            'MR_IN',
            'MAS',
            'MAS_KE',
            'MAS_TZ',
            'MER',
            'MER_KE',
            'MN',
            'MFE',
            'MFE_MU',
            'MUA',
            'MUA_CM',
            'NAQ',
            'NAQ_NA',
            'NE',
            'NE_IN',
            'NE_NP',
            'SE',
            'SE_FI',
            'SE_NO',
            'SE_SE',
            'ND',
            'ND_ZW',
            'NB',
            'NB_NO',
            'NN',
            'NN_NO',
            'NUS',
            'NUS_SD',
            'NYN',
            'NYN_UG',
            'OR',
            'OR_IN',
            'OM',
            'OM_ET',
            'OM_KE',
            'PS',
            'PS_AF',
            'FA',
            'FA_AF',
            'FA_IR',
            'PL',
            'PL_PL',
            'PT',
            'PT_AO',
            'PT_BR',
            'PT_GW',
            'PT_MZ',
            'PT_PT',
            'PT_ST',
            'PA',
            'PA_ARAB',
            'PA_ARAB_PK',
            'PA_GURU',
            'PA_GURU_IN',
            'RO',
            'RO_MD',
            'RO_RO',
            'RM',
            'RM_CH',
            'ROF',
            'ROF_TZ',
            'RN',
            'RN_BI',
            'RU',
            'RU_MD',
            'RU_RU',
            'RU_UA',
            'RWK',
            'RWK_TZ',
            'SAQ',
            'SAQ_KE',
            'SG',
            'SG_CF',
            'SBP',
            'SBP_TZ',
            'SA',
            'GD',
            'GD_GB',
            'SEH',
            'SEH_MZ',
            'SR',
            'SR_CYRL',
            'SR_CYRL_BA',
            'SR_CYRL_ME',
            'SR_CYRL_RS',
            'SR_LATN',
            'SR_LATN_BA',
            'SR_LATN_ME',
            'SR_LATN_RS',
            'KSB',
            'KSB_TZ',
            'SN',
            'SN_ZW',
            'II',
            'II_CN',
            'SI',
            'SI_LK',
            'SK',
            'SK_SK',
            'SL',
            'SL_SI',
            'XOG',
            'XOG_UG',
            'SO',
            'SO_DJ',
            'SO_ET',
            'SO_KE',
            'SO_SO',
            'ES',
            'ES_AR',
            'ES_BO',
            'ES_CL',
            'ES_CO',
            'ES_CR',
            'ES_DO',
            'ES_EC',
            'ES_SV',
            'ES_GQ',
            'ES_GT',
            'ES_HN',
            'ES419',
            'ES_MX',
            'ES_NI',
            'ES_PA',
            'ES_PY',
            'ES_PE',
            'ES_PR',
            'ES_ES',
            'ES_US',
            'ES_UY',
            'ES_VE',
            'SW',
            'SW_KE',
            'SW_TZ',
            'SV',
            'SV_FI',
            'SV_SE',
            'GSW',
            'GSW_CH',
            'SHI',
            'SHI_LATN',
            'SHI_LATN_MA',
            'SHI_TFNG',
            'SHI_TFNG_MA',
            'DAV',
            'DAV_KE',
            'TG',
            'TA',
            'TA_IN',
            'TA_LK',
            'TWQ',
            'TWQ_NE',
            'MI',
            'TE',
            'TE_IN',
            'TEO',
            'TEO_KE',
            'TEO_UG',
            'TH',
            'TH_TH',
            'BO',
            'BO_CN',
            'BO_IN',
            'TI',
            'TI_ER',
            'TI_ET',
            'TO',
            'TO_TO',
            'TR',
            'TK',
            'TR_TR',
            'TCH',
            'UK',
            'UK_UA',
            'UR',
            'UR_IN',
            'UR_PK',
            'UG',
            'UG_CN',
            'UZ',
            'UZ_ARAB',
            'UZ_ARAB_AF',
            'UZ_CYRL',
            'UZ_CYRL_UZ',
            'UZ_LATN',
            'UZ_LATN_UZ',
            'VAI',
            'VAI_LATN',
            'VAI_LATN_LR',
            'VAI_VAII',
            'VAI_VAII_LR',
            'VAL',
            'VAL_ES',
            'CA_ES_VALENCIA',
            'VE',
            'VE_ZA',
            'VI',
            'VI_VN',
            'VUN',
            'VUN_TZ',
            'CY',
            'CY_GB',
            'WO',
            'XH',
            'YAV',
            'YAV_CM',
            'YO',
            'YO_NG',
            'DJE',
            'DJE_NE',
            'ZU',
            'ZU_ZA',
        ]);
    }
}
