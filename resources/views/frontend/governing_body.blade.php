<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
      <div class="shell">
        <h2 class="veil reveal-sm-block" style="color:yellow;">Governing Body</h2>
        <div class="offset-sm-top-35">
          <ul class="list-inline list-inline-lg list-inline-dashed p">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li style="color:yellow;">Governing Body List</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div style="height:20px;">
  </div>
  <div class="container ">
    <div class="row my-5 ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card shadow">
          <div class="card-header bg-info  text-center" style="color: #4545E6">
            <h3 class="style="color:yellow;"" >The Governing Body of SBFNI</h3>
          </div>
          <div class="card-body" id="show_all_students">
            <table class="table table-striped table-sm text-center align-middle table-hover">
              <thead>
                <tr >
                  <th class="th text-center">SL No</th>
                  <th class="th text-center">Name</th>
                  <th class="th text-center">Position</th>
                </tr>
              </thead>
              <tbody class="tbody text-left">
                <tr>
                  <td class="tdnumber text-center">1</td>
                  <td >Dr. Mohammad Zakiul Islam Faruque,
                    EC Member, Diabetic Association Lalmonirhat</td>
                  <td>Head of Managment Commitee</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">2</td>
                  <td>Mohammad Wahid Hossain-Country Director of Sonar Bangla Foundation Bangladesh,</td>
                  <td>Member of Managment Commitee</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">3</td>
                  <td>Dr. Mobasher Alam, Head of Nephrology, Rangpur Medical College,</td>
                  <td>Member of Managment Commitee</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">4</td>
                  <td>Dr. Mahmudur Rahman,
                    Medical Director SBF</td>
                  <td>Member of Managment Commitee</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">5</td>
                  <td>Principal,
                    SBF Nursing Institute. </td>
                  <td>Member of Managment Commitee </td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">6</td>
                  <td>Dr. Kasham Ali
                    Ex-Civil Surgeon.
                  </td>
                  <td>Member of Managment Commitee</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">7</td>
                  <td>A K M Qamrul Hasan,</td>
                  <td>Member of Managment Commitee</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">8</td>
                  <td>Dr. Shafiqul Islam, Editor, Lalmonirhat Barta</td>
                  <td>Member of Managment Commitee</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="container ">
    <div class="row my-5 ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card shadow">
          <div class="card-header bg-info  text-center" style="color: #4545E6">
            <h3 class="text-light">The Board of Advisory</h3>
          </div>
          <div class="card-body" id="show_all_students">
            <table class="table table-striped table-sm text-center align-middle table-hover">
              <thead>
                <tr>
                  <th class="th text-center">SL No</th>
                  <th class="th text-left">Name</th>
                  <th class="th text-left">Position</th>
                </tr>
              </thead>
              <tbody class="tbody text-left">
                <tr>
                  <td class="tdnumber text-center">1</td>
                  <td>Dr. Abu Kamal</td>
                  <td>Chief Advisor</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">2</td>
                  <td>Dr. Anis Khan</td>
                  <td>Advisor</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">3</td>
                  <td>Dr. Zahed Ahmed </td>
                  <td>Advisor</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">4</td>
                  <td>Dr. Imtiaz Islam</td>
                  <td>Advisor</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">5</td>
                  <td>Dr. Mahmud Hossain</td>
                  <td>Advisor</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class="row my-5 ">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="card shadow">
          <div class="card-header bg-info  text-center" style="color: #4545E6">
            <h3 class="text-light">The Academic Council Members</h3>
          </div>
          <div class="card-body" id="show_all_students">
            <table class="table table-striped table-sm text-center align-middle table-hover">
              <thead>
                <tr>
                  <th class="th text-center">SL No</th>
                  <th class="th text-left">Name</th>
                  <th class="th text-left">Position</th>
                </tr>
              </thead>
              <tbody class="tbody text-left">
                <tr>
                  <td class="tdnumber text-center">1</td>
                  <td>Dr. Kasham Ali</td>
                  <td>Ex-Civil Surgeon (Guest Lecturer) </td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">2</td>
                  <td>Dr. Md. Zakiul Islam Faruque</td>
                  <td>EC Member, The Diabetic Association of Lalmonirhat.</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">3</td>
                  <td>Major (Retd.) Saleha Begum</td>
                  <td>Principal, SBF Nursing Institute.</td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">4</td>
                  <td>Ms.Saheba Begum</td>
                  <td>Principal, Lalmonirhat Govt. Nursing College. </td>
                </tr>
                <tr>
                  <td class="tdnumber text-center">5</td>
                  <td>Dr. Shirajul Hoque</td>
                  <td>Superintendent, Sadar Hospital, Lalmonirhat.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

</x-frontend.layouts.master>