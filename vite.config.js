import { resolve } from 'path'
import kirby from 'vite-plugin-kirby'

export default ({ mode }) => ({
  root: 'src',
  base: mode === 'development' ? '/' : '/dist/',
  build: {
    outDir: resolve(process.cwd(), 'public/dist'),
    emptyOutDir: true,
    //manifest: true,
    rollupOptions: {
      input: resolve(process.cwd(), 'src/index.js')
    }
  },

  plugins: [
    kirby()
  ]
})