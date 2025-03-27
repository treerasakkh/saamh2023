  @extends('layouts.app')

  @section('content')
  <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
      <div class="container mx-auto px-4 py-12">
          <div class="text-center mb-16">
              <h1 class="font-prompt text-4xl font-bold text-gray-800 mb-4">
                  เกี่ยวกับสมาคม
              </h1>
              <div class="w-24 h-1 bg-blue-500 mx-auto"></div>
          </div>

          <div class="max-w-4xl mx-auto space-y-12">
              <section class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl">
                  <h2 class="font-prompt text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-pink-500 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                      </svg>
                      
                      ข้อมูลเบื้องต้น
                  </h2>
                  <div class="space-y-4 font-noto-thai text-gray-600 leading-relaxed">
                      <p>
                          สมาคมนี้ชื่อว่า
                          <span class="font-semibold text-gray-800">
                              "สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร"
                          </span>
                          โดยเรียกชื่อย่อว่า
                          <span class="font-semibold text-blue-600">ส.บ.ม.ม.ห.</span>
                      </p>
                      <p>
                          เรียกเป็นภาษาอังกฤษว่า
                          <span class="font-semibold text-gray-800">
                              "The Secondary school Administrator Association of Mukdahan Province"
                          </span>
                          ย่อว่า
                          <span class="font-semibold text-blue-600">S.A.A.M.H.</span>
                      </p>
                  </div>
              </section>

              <section class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl">
                  <h2 class="font-prompt text-2xl font-semibold text-gray-800 mb-6">
                      เครื่องหมายของสมาคม
                  </h2>
                  <div class="grid md:grid-cols-2 gap-8 items-center">
                      <div class="w-48 mx-auto md:mx-0 rounded-full flex items-center justify-center">
                          <img src="{{ asset('images/logo.png') }}" alt="เครื่องหมายสมาคม" class="w-40 rounded-full">
                      </div>
                      <div class="font-noto-thai text-gray-600 leading-relaxed">
                          <p>
                              เป็นรูปวงกลม มีรูปหอแก้วมุกดาหารและสะพานมิตรภาพไทย-ลาว แห่งที่ 2 ขอบวงกลมมีตัวหนังสือเขียนว่า
                              "สมาคมผู้บริหารโรงเรียนมัธยมศึกษาจังหวัดมุกดาหาร"
                          </p>
                      </div>
                  </div>
              </section>

              <section class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl">
                  <h2 class="font-prompt text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="blue" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-blue-500 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                      </svg>
                      
                      ที่ตั้งสำนักงานใหญ่
                  </h2>
                  <div class="grid md:grid-cols-2 gap-8">
                      <div class="space-y-4 font-noto-thai">
                          <div class="space-y-2">
                              <p class="text-gray-600 font-bold">โรงเรียนมุกดาหาร</p>
                              <p class="text-gray-600">เลขที่ 147 ถนนพิทักษ์พนมเขต</p>
                              <p class="text-gray-600">ตำบลมุกดาหาร อำเภอเมืองมุกดาหาร</p>
                              <p class="text-gray-600">จังหวัดมุกดาหาร 49000</p>
                          </div>
                          <div class="flex items-center text-gray-600 space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                              </svg>
                              
                            <a href="tel:042611088" class="hover:text-blue-500 transition duration-200">
                                042-611-088
                            </a>
                        </div>
                        
                      </div>
                      <div class="h-80 rounded-lg overflow-hidden shadow-md">
                          <iframe
                              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d956.188992070015!2d104.7161845208152!3d16.538413072234988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313dc64f941e5551%3A0x5714419da8de07d1!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4Lih4Li44LiB4LiU4Liy4Lir4Liy4Lij!5e0!3m2!1sth!2sth!4v1732368454518!5m2!1sth!2sth"
                              class="w-full h-full border-0 rounded-lg"
                              allowfullscreen="true"
                              loading="lazy"
                              referrerpolicy="no-referrer-when-downgrade">
                          </iframe>
                      </div>
                  </div>
              </section>
          </div>
      </div>
  </div>
  @endsection