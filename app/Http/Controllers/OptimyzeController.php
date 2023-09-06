<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimyzeController extends Controller
{
    public function doing_busness(){
        return view('optimyze.doing-business');
    }

    public function unlock_your_business(){
        return view('optimyze.unlock-your-business');
    }

    public function drive_business_performance(){
        return view('optimyze.drive-business');
    }

    public function gain_finance(){
        return view('optimyze.gain-financial');
    }

    public function audit(){
        return view('optimyze.audit');
    }

    public function tax_reporting(){
        return view('optimyze.tax-reporting');
    }
    
    public function rising_capital(){
        return view('optimyze.rising-capital');
    }
    
      public function finance_ops(){
        return view('optimyze.finance-ops');
    }
    /**********************************************I am small business********************************************* */

    public function owner_managed(){
        return view('services.owner-manage');
    }

    public function tech_business(){
        return view('services.tech-business');
    }
    
    public function start_ups(){
        return view('services.start-ups');
    }


    public function manufacturers(){
        return view('services.manufacturers');
    }

    public function distributors(){
        return view('services.distributors');
    }

    public function charitable_organization(){
        return view('services.charitable-organizations');
    }

    public function saas_businesses(){
        return view('services.saas-businesses');
    }

    public function tranform_finance(){
        return view('services.transform-finance');
    }

    public function coprate_finence_service(){
        return view('services.coprate-finence-services');
    }

    public function unlock_busness(){
        return view('services.unlock_business');
    }

    public function drive_performance(){
        return view('services.drive-performance');
    }

    public function fractional_services(){
        return view('services.fraction-services');
    }
    
      /**********************************************I am private client********************************************* */
      
      
     public function family_offices(){
         return view('services.family-offices');
     }
     
     
     public function tax_planning(){
         return view('services.tax-planning');
     }
     
     public function international_private_client(){
         return view('services.international-private-client');
     }
     
     public function trusts_and_estate_planning(){
         return view('services.trust-planning');
     }
     
     /*****************************************My field is non profit business**************************************************************** */
     
     public function cost_of_doing_business(){
         return view('services.cost-of-doing-business');
     }
     
     public function audit_and_assurance(){
         return view('services.audit-assurance');
     }
     
     public function tax_planning_service(){
          return view('services.tax-planning-service');
     }
     
     public function governance(){
          return view('services.governance');
     }
}
