<template>
    <div class="bg-white dark:bg-zinc-900">
        <div class=" p-8 mb-2">
            <div class="max-w-7xl mx-auto grid grid-cols-1 ">
                <h2 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2 text-center"> Komjak Hadir Sebagai
                    Solusi</h2>
                <p class="text-zinc-600 dark:text-zinc-400 mb-6 text-center">
                    Hadir Sebagai Solusi untuk mengisi kekosongan kegiatan pengembanga diri menyeluruh
                    bagi orang muda Katolik di Gereja dengan memberi 4 aspek .
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                <CardComponent class="mb-2" v-for="(item, index) in items" :key="index" :item="item" />
            </div>
        </div>
        <div class=" p-8 mb-2">
            <div class="max-w-7xl mx-auto grid grid-cols-1 ">
                <h2 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2 text-center"> 5 Pilar Komjak</h2>
                <p class="text-zinc-600 dark:text-zinc-400 mb-6 text-center">
                    Lima Pilar KOMJak sebagai Fondasi Pengembangan Holistik Orang Muda Katolik di Jakarta, Dikembangkan
                    Melalui Serangkaian Proses Pengolahan Diri dengan Fokus pada Empat Aspek Kunci KOMJak, proses ini
                    dilakukan dalam 3 tahap selama 1 tahun
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 ">
                <CardComponent class="mb-2" v-for="(item, index) in itemsPilar" :key="index" :item="item" />
            </div>
        </div>
    </div>
</template>

<script>
import CardComponent from '../CardComponent.vue';
export default {
    components: { CardComponent },

    data() {
        return {
            items: [
                {
                    image:"https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01h3hx4zp7mtkh2a7cknargvwx.jpg",
                    title: 'Aspek Kognitif (Intelektual) ',
                    description: 'Mengembangkan pemikiran kritis, kreativitas, dan pengetahuan dalam berbagai bidang, sehingga peserta dapat menjadi individu yang berpengetahuan luas'
                },
                {
                    image: "https://neurolism.web.id/wp-content/uploads/2018/04/about-Neuroplastis-Spiritual-System-neurolism.jpg",
                    title: 'Olah Afektif (Olah Rasa)',
                    description: 'Mengembangkan kecerdasan emosional dan sosial peserta, membantu mereka mengenali, memahami, dan mengelola emosi mereka dengan baik.'
                },
                {
                    image: "https://flowbite.com/docs/images/blog/image-2.jpg",
                    title: 'Aspek Konatif (Sikap Prilaku) ',
                    description: 'Membimbing peserta untuk mengembangkan sikap positif, nilai-nilai moral yang kuat, serta perilaku yang baik dan bertanggung jawab.'
                },
                {
                    image: "https://flowbite.com/docs/images/blog/image-3.jpg",
                    title: 'Aspek Keterampilan Hidup',
                    description: 'Memberikan pelatihan dan pembelajaran praktis untuk membantu peserta mengembangkan keterampilan hidup yang diperlukan dalam kehidupan sehari-hari dan profesional.'
                },
            ],
            itemsPilar: [
                {
                    image: "https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01h3hx4zp7mtkh2a7cknargvwx.jpg",
                    title: 'Olah Pengalaman ',
                    description: 'Peserta akan mengamati dan merenungkan pengalaman mereka sesuai dengan tema yang diberikan, untuk menggali pemahaman yang lebih dalam tentang diri dan lingkungan sekitar.'
                },
                {
                    image: "https://neurolism.web.id/wp-content/uploads/2018/04/about-Neuroplastis-Spiritual-System-neurolism.jpg",
                    title: 'Olah Rasa',
                    description: 'Peserta akan membawa pengalaman mereka ke dalam proses refleksi untuk mengidentifikasi dan mengolah berbagai perasaan yang muncul sebagai respons terhadap pengalaman tersebut.'
                },
                {
                    image: "https://flowbite.com/docs/images/blog/image-2.jpg",
                    title: 'Olah Data',
                    description: 'Peserta akan belajar untuk mengumpulkan data secara fakta dan objektif , serta mengolah data tersebut dengan menggunakan metodologi KOMJak untuk mendapatkan pemahaman yang lebih mendalam tentang suatu isu atau fenomena.'
                },
                {
                    image: "https://flowbite.com/docs/images/blog/image-3.jpg",
                    title: 'Olah Pengetahuan',
                    description: 'Peserta akan diminta untuk membandingkan dan mengintegrasikan pengetahuan pribadi mereka dengan sumber-sumber pengetahuan lain yang terpercaya, sehingga dapat mengembangkan pemahaman yang lebih luas dan komprehensif.'
                },
                {
                    image: "https://cdn.mos.cms.futurecdn.net/ybU2RY4aNU75Q3T8tj9Xff-650-80.jpg.webp",
                    title: 'Olah Iman',
                    description: 'Peserta akan mengaitkan pengalaman dan pemahaman mereka dengan iman dan nilai-nilai spiritual, sehingga dapat memperdalam hubungan mereka dengan Tuhan dan mendorong mereka untuk bertindak dengan aksi nyata yang berdasar..'
                },
            ],
        }
    },
}
</script>