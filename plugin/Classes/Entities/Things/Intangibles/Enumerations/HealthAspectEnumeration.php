<?php declare(strict_types=1);

namespace JsonLDForWP\Plugin\Classes\Entities\Things\Intangibles\Enumerations;

/**
* @package JsonLDForWP
*/
enum HealthAspectEnumeration{
	case AllergiesHealthAspect;
	case BenefitsHealthAspect;
	case CausesHealthAspect;
	case ContagiousnessHealthAspect;
	case EffectivenessHealthAspect;
	case GettingAccessHealthAspect;
	case HowItWorksHealthAspect;
	case HowOrWhereHealthAspect;
	case IngredientsHealthAspect;
	case LivingWithHealthAspect;
	case MayTreatHealthAspect;
	case MisconceptionsHealthAspect;
	case OverviewHealthAspect;
	case PatientExperienceHealthAspect;
	case PregnancyHealthAspect;
	case PreventionHealthAspect;
	case PrognosisHealthAspect;
	case RelatedTopicsHealthAspect;
	case RisksOrComplicationsHealthAspect;
	case SafetyHealthAspect;
	case ScreeningHealthAspect;
	case SeeDoctorHealthAspect;
	case SelfCareHealthAspect;
	case SideEffectsHealthAspect;
	case StagesHealthAspect;
	case SymptomsHealthAspect;
	case TreatmentsHealthAspect;
	case TypesHealthAspect;
	case UsageOrScheduleHealthAspect;

	public function description():string {
		return __("HealthAspectEnumeration enumerates several aspects of health content online, each of which might be described using hasHealthAspect and HealthTopicContent.", 'jsonld-for-wordpress');
	}
}