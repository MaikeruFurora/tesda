@extends('layout.applicantSide.app')

{{-- title page --}}
@section('content-title','Dashboard')

@section('content')
<div class="col-12">
    @section('title','Self Assessment Guide')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="{{ route('applicant.sag.css.store') }}">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('applicant.dashboard') }}" class="btn btn-info">Back</a>
                </div>
                    
                    <div class="card-body mb-3">
                    
                        {{-- 
                            
                            COC 1 CSS
                            
                            --}}
    
                        <table class="table table-sm table-bordered">
                            <tr>
                                <td>Qualification</td>
                                <td colspan="2">COMPUTER SYSTEMS SERVICING NC II</td>
                            </tr>
                            <tr>
                                <td><p class="my-2"><b>COC 1 Title</b></p></td>
                                <td colspan="2">INSTALL AND CONFIGURE COMPUTER SYSTEMS</td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>Instruction</b>: Read each question and check the appropriate box to indicate your 
                                    answer.</td>
                            </tr>
                            <tr>
                                <td><b>Can I?</b></td>
                                <td class="text-center"><b>Yes</b></td>
                                <td class="text-center"><b>No</b></td>
                            </tr>
                            <tr>
                                <td><b> Plan and prepare unit for assembly*</b></td>
                                <td><input type="radio" name="coc1_c1" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c1" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b> Identify and obtain materials necessary to complete the work and 
                                    check against system requirements*</b></td>
                                <td><input type="radio" name="coc1_c2" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c2" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b> Obtain tools, equipment and testing devices to carry out the work 
                                    and check for correct operation and safety*</b></td>
                                <td><input type="radio" name="coc1_c3" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c3" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Assemble following computer hardware according to established OH 
                                    & S policies and procedures and system requirements:
                                    <p class="mb-0">a. Motherboard and its components</p>
                                    <p class="mb-0">b. Hard drives and its accessories</p>
                                   <p class="mb-0"> c. Power supply</p>
                                    <p class="mb-0">d. Peripherals such as keyboard, mouse, cables*</p></b></td>
                                <td><input type="radio" name="coc1_c4" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c4" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Perform Basic Input Output System(BIOS) configuration based on 
                                    system requirements*</b></td>
                                <td><input type="radio" name="coc1_c5" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c5" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Create portable bootable devices according to software 
                                    manufacturer’s instruction
                                    *</b></td>
                                <td><input type="radio" name="coc1_c6" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c6" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b> Prepare customized installers according to software utilization guide 
                                    and end-user agreement
                                </b></td>
                                <td><input type="radio" name="coc1_c7" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c7" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Install portable applications according to software user guide and 
                                    software license
                                </b></td>
                                <td><input type="radio" name="coc1_c8" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c8" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Install operating system according to established installation 
                                    procedure and end-user agreement
                                </b></td>
                                <td><input type="radio" name="coc1_c9" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c9" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Install and configure drivers of peripherals and devices according to 
                                    manufacturer’s instructions and OS installation procedures
                                </b></td>
                                <td><input type="radio" name="coc1_c10" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c10" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Access and install OS and drivers updates/patches based on manufacturer’s recommendations and requirements*
                                </b></td>
                                <td><input type="radio" name="coc1_c11" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c11" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Check quality of work according to established procedures*
                                </b></td>
                                <td><input type="radio" name="coc1_c12" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c12" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Install application software based on installation guides, end-user 
                                    agreement and license agreement *
                                    
                                </b></td>
                                <td><input type="radio" name="coc1_c13" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c13" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Carry out variation in application software installation according to 
                                    manufacturer’s recommendations and requirements*                                
                                </b></td>
                                <td><input type="radio" name="coc1_c14" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c14" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Access and install software updates based on manufacturer’s 
                                    recommendations and requirements*                               
                                </b></td>
                                <td><input type="radio" name="coc1_c15" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c15" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Test devices/systems/installation to determine whether they conform 
                                    to requirements*                               
                                </b></td>
                                <td><input type="radio" name="coc1_c16" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c16" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Conduct stress test to ensure reliability of equipment*                            
                                </b></td>
                                <td><input type="radio" name="coc1_c17" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c17" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Follow 5S and 3Rs according to environmental policies                            
                                </b></td>
                                <td><input type="radio" name="coc1_c18" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c18" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Complete and forward the documentation to appropriate personnel 
                                    and/or authority*                            
                                </b></td>
                                <td><input type="radio" name="coc1_c19" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc1_c19" value="0" class="form-control form-control-sm"></td>
                            </tr>
                        </table>
    
                        {{-- 
                            
                            COC 2 CSS
    
                            --}}
                            <table class="table table-sm table-bordered mt-5">
                                <tr>
                                    <td>Qualification</td>
                                    <td colspan="2">COMPUTER SYSTEMS SERVICING NC II</td>
                                </tr>
                                <tr>
                                    <td><p class="my-2"><b>COC 2 Title</b></p></td>
                                    <td colspan="2">SET UP COMPUTER NETWORKS</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Instruction</b>: Read each question and check the appropriate box to indicate your 
                                        answer.</td>
                                </tr>
                                <tr>
                                    <td><b>Can I?</b></td>
                                    <td class="text-center"><b>Yes</b></td>
                                    <td class="text-center"><b>No</b></td>
                                </tr>
                                <tr>
                                    <td><b> Instruction: Read each question and check the appropriate box to indicate your 
                                        answer.</b></td>
                                    <td><input type="radio" name="coc2_c1" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c1" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>Identify and obtain network materials necessary to complete the work 
                                        according to established procedures and checks against system 
                                        requirements*
                                        </b></td>
                                    <td><input type="radio" name="coc2_c2" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c2" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>Identify and obtain network materials necessary to complete the work 
                                        according to established procedures and checks against system 
                                        requirements*
                                        </b></td>
                                    <td><input type="radio" name="coc2_c3" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c3" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>Use appropriate personal protective equipment and follows OH & S 
                                        policies and procedures
                                        <p class="mb-0">a. Motherboard and its components</p>
                                        <p class="mb-0">b. Hard drives and its accessories</p>
                                       <p class="mb-0"> c. Power supply</p>
                                        <p class="mb-0">d. Peripherals such as keyboard, mouse, cables*</p></b></td>
                                    <td><input type="radio" name="coc2_c4" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c4" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b> Perform copper cable splicing in accordance with the standards such 
                                        as the 568A and 568B color coding cabling standards*
                                        </b></td>
                                    <td><input type="radio" name="coc2_c5" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c5" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                    
                                        Install network cables and cable raceway in accordance with 
                                        established procedures and installation requirements*
                                        <p class="mb-0">- slotted PVC </p>
                                        <p class="mb-0">- metallic raceway</p>
                                        <p class="mb-0">- flexible conduit</p>
                                        
                                    </b></td>
                                    <td><input type="radio" name="coc2_c6" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c6" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b> Perform and check installation work to ensure compliance with 
                                        requirements*
                                    </b></td>
                                    <td><input type="radio" name="coc2_c7" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c7" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b> Follow 5S and 3Rs according to environmental policies
    
                                    </b></td>
                                    <td><input type="radio" name="coc2_c8" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c8" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>Check network connectivity of each terminal in accordance with 
                                        network design*
                                    </b></td>
                                    <td><input type="radio" name="coc2_c9" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c9" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>Check network connectivity of each terminal in accordance with 
                                        network design
                                    </b></td>
                                    <td><input type="radio" name="coc2_c10" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c10" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure network interface card (NIC) settings in accordance with 
                                        network design* <br>
                                        - Configure IP address of all devices are configured
                                        
                                    </b></td>
                                    <td><input type="radio" name="coc2_c11" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c11" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Carry out communication checking between terminals in accordance 
                                        with OS network configuration guides* <br>
                                        - File sharing <br>
                                        - Access network resources
                                        
                                    </b></td>
                                    <td><input type="radio" name="coc2_c12" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c12" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Respond to unplanned events or conditions in accordance with 
                                        established procedures* <br>
                                        - Diagnose problems by retracing steps or localizing the trouble 
                                        area
                                    </b></td>
                                    <td><input type="radio" name="coc2_c13" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c13" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Set router/Wi-Fi/ wireless access point/repeater configuration* <br>
                                        - Configure and set router                             
                                    </b></td>
                                    <td><input type="radio" name="coc2_c14" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c14" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure client device systems settings in accordance with 
                                        manufacturer’s instructions, end-user preference and network 
                                        design*
                                                                       
                                    </b></td>
                                    <td><input type="radio" name="coc2_c15" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c15" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure Client computer wi-fi access                              
                                    </b></td>
                                    <td><input type="radio" name="coc2_c16" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c16" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure local area network (LAN) port*                            
                                    </b></td>
                                    <td><input type="radio" name="coc2_c17" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c17" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure wide area network (WAN) port*                            
                                    </b></td>
                                    <td><input type="radio" name="coc2_c18" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c18" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure wireless settings*                           
                                    </b></td>
                                    <td><input type="radio" name="coc2_c19" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c19" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Configure security/firewall/advance settings*                         
                                    </b></td>
                                    <td><input type="radio" name="coc2_c20" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c20" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Undertake final inspection to ensure that the configuration conforms 
                                        with the manufacturer’s instructions/manual                
                                    </b></td>
                                    <td><input type="radio" name="coc2_c21" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c21" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Check computer networks to ensure safe operation*             
                                    </b></td>
                                    <td><input type="radio" name="coc2_c22" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c22" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Prepare/complete reports according to company requirements*            
                                    </b></td>
                                    <td><input type="radio" name="coc2_c23" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc2_c23" value="0" class="form-control form-control-sm"></td>
                                </tr>
                            </table>
    
                             {{-- 
                            
                            COC 3 CSS
                            
                            --}}
    
                        <table class="table table-sm table-bordered mt-5">
                            <tr>
                                <td>Qualification</td>
                                <td colspan="2">COMPUTER SYSTEMS SERVICING NC II</td>
                            </tr>
                            <tr>
                                <td><p class="my-2"><b>COC 3 Title</b></p></td>
                                <td colspan="2">SET UP COMPUTER SERVERS</td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>Instruction</b>: Read each question and check the appropriate box to indicate your 
                                    answer.</td>
                            </tr>
                            <tr>
                                <td><b>Can I?</b></td>
                                <td class="text-center"><b>Yes</b></td>
                                <td class="text-center"><b>No</b></td>
                            </tr>
                            <tr>
                                <td><b>Create user folder in accordance with network operating system 
                                    features*</b></td>
                                <td><input type="radio" name="coc3_c1" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c1" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b> Configure user access level based on NOS features and established 
                                    network access policies and end-user requirements*</b></td>
                                <td><input type="radio" name="coc3_c2" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c2" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Perform security check in accordance with established network 
                                    access policies/end-user requirements*
                                    </b></td>
                                <td><input type="radio" name="coc3_c3" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c3" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>
                                    Check normal functions of server in accordance with manufacturer’s 
                                    instructions*</b></td>
                                <td><input type="radio" name="coc3_c4" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c4" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Install/update required modules/add-ons based on NOS installation 
                                    procedures*</b></td>
                                <td><input type="radio" name="coc3_c5" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c5" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Confirm network services to be configured based on user/system 
                                    requirements*
                                    *</b></td>
                                <td><input type="radio" name="coc3_c6" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c6" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Check operation of network services based on user/system 
                                    requirements*
                                </b></td>
                                <td><input type="radio" name="coc3_c7" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c7" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Respond to unplanned events or conditions in accordance with 
                                    established procedure*
                                </b></td>
                                <td><input type="radio" name="coc3_c8" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c8" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b> Perform testing of network through file and printer sharing, 
                                    documentation and pre-deployment procedures*
                                </b></td>
                                <td><input type="radio" name="coc3_c9" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c9" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Undertake pre-deployment procedures based on enterprise policies 
                                    and procedures*                                
                                </b></td>
                                <td><input type="radio" name="coc3_c10" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c10" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>
                                    Undertake operation and security check based on end-user requirements*
                                </b></td>
                                <td><input type="radio" name="coc3_c11" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c11" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                                <td><b>Prepare and complete reports according to enterprise policies and 
                                    requirements*
                                </b></td>
                                <td><input type="radio" name="coc3_c12" value="1" class="form-control form-control-sm"></td>
                                <td><input type="radio" name="coc3_c12" value="0" class="form-control form-control-sm"></td>
                            </tr>
                            
                        </table>
    
    
                          {{-- 
                            
                            COC 4 CSS
                            
                            --}}
    
                            <table class="table table-sm table-bordered mt-5">
                                <tr>
                                    <td>Qualification</td>
                                    <td colspan="2">COMPUTER SYSTEMS SERVICING NC II</td>
                                </tr>
                                <tr>
                                    <td><p class="my-2"><b>COC 4 Title</b></p></td>
                                    <td colspan="2">SET UP COMPUTER SERVERS</td>
                                </tr>
                                <tr>
                                    <td colspan="3"><b>Instruction</b>: Read each question and check the appropriate box to indicate your 
                                        answer.</td>
                                </tr>
                                <tr>
                                    <td><b>Can I?</b></td>
                                    <td class="text-center"><b>Yes</b></td>
                                    <td class="text-center"><b>No</b></td>
                                </tr>
                                <tr>
                                    <td><b>Plan and prepare maintenance and/or diagnosis of faults in line with 
                                        job requirements*</b></td>
                                    <td><input type="radio" name="coc4_c1" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c1" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b> 
                                        Obtain and check tools, equipment and testing devices for correct 
                                        operation and safety <br>
                                        - Hardware tools <br>
                                        - Software tools
                                    </b></td>
                                    <td><input type="radio" name="coc4_c2" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c2" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>Obtain and check materials necessary to complete the work in 
                                        accordance with established procedures and checks against job
                                        requirements
                                        </b></td>
                                    <td><input type="radio" name="coc4_c3" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c3" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Follow OHS policies and procedures
                                    </b></td>
                                    <td><input type="radio" name="coc4_c4" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c4" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Check computer systems and networks for maintenance against job/service order instructions and specifications    
                                    </b></td>
                                    <td><input type="radio" name="coc4_c5" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c5" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Use appropriate personal protective equipment in line with standard procedures    
                                    </b></td>
                                    <td><input type="radio" name="coc4_c6" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c6" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Check normal function of computer systems and networks based on 
                                        manufacturer’s instructions
                                    </b></td>
                                    <td><input type="radio" name="coc4_c7" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c7" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Perform scheduled/periodic maintenance in accordance with manufacturer’s requirements
                                    </b></td>
                                    <td><input type="radio" name="coc4_c8" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c8" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Perform necessary repairs/replacements in accordance with established procedures
                                    </b></td>
                                    <td><input type="radio" name="coc4_c9" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c9" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Respond to unplanned events or conditions in accordance with established procedures                                
                                    </b></td>
                                    <td><input type="radio" name="coc4_c10" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c10" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Diagnose faults or problems in the computer systems and networks according to requirements and in line with the standard procedures*
    
                                    </b></td>
                                    <td><input type="radio" name="coc4_c11" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c11" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                <tr>
                                    <td><b>
                                        Manage and implement contingency measures in accordance with established procedure
                                    </b></td>
                                    <td><input type="radio" name="coc4_c12" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c12" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Replace or correct defective components or parts without damage to 
                                        the surrounding environment or services*
                                        
                                    </b></td>
                                    <td><input type="radio" name="coc4_c13" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c13" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Make adjustments, if necessary in accordance with established 
                                        procedures*
                                    </b></td>
                                    <td><input type="radio" name="coc4_c14" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c14" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Clean and clear work site of all debris to ensure safety in accordance with company procedures
                                    </b></td>
                                    <td><input type="radio" name="coc4_c15" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c15" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Follow 5S and 4Rs according to environmental policies
                                    </b></td>
                                    <td><input type="radio" name="coc4_c16" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c16" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Undertake final inspections to ensure that the testing conducted on the device conforms with the manufacturer’s instructions/manual*
                                    </b></td>
                                    <td><input type="radio" name="coc4_c17" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c17" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Check and test computer systems and networks to ensure safe 
                                        operation*
                                    </b></td>
                                    <td><input type="radio" name="coc4_c18" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c18" value="0" class="form-control form-control-sm"></td>
                                </tr>
    
                                <tr>
                                    <td><b>
                                        Prepare and complete reports according to company requirements*
                                    </b></td>
                                    <td><input type="radio" name="coc4_c19" value="1" class="form-control form-control-sm"></td>
                                    <td><input type="radio" name="coc4_c19" value="0" class="form-control form-control-sm"></td>
                                </tr>
                                
                            </table>
                    </div>

                    <div class="card-footer">
                        <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">SUBMIT</button>
                    </div>
                </div>
                @include('applicant.partial.notice')
            </form>
        </div>
    </div>
</div>
@endsection