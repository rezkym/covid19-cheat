                                    {{-- Master Fitur --}}
                                    <li class="has-submenu">
                                        <a href="#"> <i class="mdi mdi-account-group-outline"></i> Pengguna <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="javascript:void(0);"> Statistik Pengguna </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"> Data Pengguna </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"> Tambah Pengguna </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Laporan Pengguna</a>
                                            </li>
                                            @if(Auth::user()->account_level == 'master' OR Auth::user()->account_level == 'admin')
                                            <li>
                                                <a href="javascript:void(0);"> Sampah Pengguna </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </li>