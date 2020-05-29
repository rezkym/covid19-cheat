                                
                                @if(Auth::user()->account_level == 'master')
                                
                                    {{-- Master fitur --}}
                                    @include('layouts.fitur.master')

                                @elseif(Auth::user()->account_level == 'admin')

                                    {{-- Admin fitur --}}
                                    @include('layouts.fitur.admin')

                                @elseif(Auth::user()->account_level == 'reseller')

                                    {{-- Reseller fitur --}}
                                    @include('layouts.fitur.reseller')

                                @elseif(Auth::user()->account_level == 'agen')

                                    {{-- Agen fitur --}}
                                    @include('layouts.fitur.agen')

                                @endif

                                {{-- Global Fitur / User --}}
                                @include('layouts.fitur.user')