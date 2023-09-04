<div>
    @if (session('message'))
        <div class="alert alert-success bg-info p-2 mb-3 text-white text-capitalize" id="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-between">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong class="mx-2">{{ __('HRM') }}</strong> {{ __('Attendance') }}</h3>
                </div>
            </div>
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <a href="{{ route('document-management.index') }}">
                        <i class="fa-solid fa-home fa-2x text-info"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                                <th>13</th>
                                <th>14</th>
                                <th>15</th>
                                <th>16</th>
                                <th>17</th>
                                <th>18</th>
                                <th>19</th>
                                <th>20</th>
                                <th>22</th>
                                <th>23</th>
                                <th>24</th>
                                <th>25</th>
                                <th>26</th>
                                <th>27</th>
                                <th>28</th>
                                <th>29</th>
                                <th>30</th>
                                <th>31</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="{{ route('attendance.create') }}">Albina Simonis</a>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td>
                                    <div class="half-day"><span class="first-off"><i
                                                class="fa fa-check text-success"></i></span> <span class="first-off"><i
                                                class="fa fa-close text-danger"></i></span></div>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td>
                                    <div class="half-day"><span class="first-off"><i
                                                class="fa fa-close text-danger"></i></span> <span class="first-off"><i
                                                class="fa fa-check text-success"></i></span></div>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ route('attendance.create') }}">Cristina Groves</a>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{ route('attendance.create') }}">Haylie Feeney</a>
                                </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Mary Mericle</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Zoe Butler</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Cristina Groves</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Marie Wells</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Henry Daniels</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Mark Hunter</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                            <tr>
                                <td>Michael Sullivan</td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                                <td><i class="fa fa-check text-success"></i> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
