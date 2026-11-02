# College Admission Portal - Theme & Design System

A clean, standardized design guide for typography, color palette, buttons, and visual effects across the project.

---

## 1. Color Palette

| Token Name | Hex Code | Tailwind / Usage | Description |
| :--- | :--- | :--- | :--- |
| **Canvas Background** | `#FFFFFF` | `bg-white` | Spotless pure white page & card background |
| **Heading & Primary** | `#100C01` | `text-[#100C01]`, `bg-[#100C01]` | Deep rich charcoal black for main headings & solid buttons |
| **Subheading & Nav** | `#39353B` | `text-[#39353B]` | Neutral charcoal for subtitles and navbar links |
| **Brand Thick Orange** | `#F05023` | `hover:text-[#F05023]`, `hover:bg-[#F05023]` | Vibrant brand orange for hovers, borders & ambient glow |
| **Muted & Placeholder** | `#71717A` | `text-[#71717A]` | Gray for input placeholders, icons, and helper text |
| **Border & Dividers** | `#E5E5E7` | `border-[#E5E5E7]`, `border-[#F0EFEB]` | Subtle light gray borders for cards and header divider |

---

## 2. Text Selection Style

When any text on the website is highlighted/selected with the mouse:

```html
selection:bg-[#F05023] selection:text-white
```
- **Selection Background:** `#F05023` (Brand Orange)
- **Selection Text Color:** `#FFFFFF` (Pure White)

---

## 3. Typography Stack

- **Font Family:** `Inter, ui-sans-serif, system-ui, sans-serif`
- **Google Fonts Import:**
  ```html
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  ```

### Hierarchy:
1. **Main Heading (`h1`)**:
   - Weight: `700` (Bold)
   - Size: `36px` (Mobile) / `54px` (Desktop) — `text-3xl sm:text-4xl md:text-5xl lg:text-[54px]`
   - Color: `#100C01`
   - Line Height: `1.18` (leading tight)
   - Alignment: Center

2. **Subheading (`p`)**:
   - Weight: `500` (Medium)
   - Size: `18px` (Mobile) / `20px` (Desktop) — `text-lg sm:text-xl`
   - Color: `#39353B`
   - Alignment: Center

3. **Navbar & Buttons**:
   - Weight: `500` (Medium) / `600` (Semibold)
   - Size: `14px` - `15px`
   - Hover Color: `#F05023`

4. **Input Placeholders & Content**:
   - Weight: `400` (Regular) / `500` (Medium)
   - Size: `14px` - `15px`
   - Color: `#71717A`

---

## 4. UI Components & Border Radius

1. **Buttons (Fiilo Minimal Style)**:
   - **Border Radius:** `rounded-lg` (Minimal ~8px to 10px, avoids full pill shape)
   - **Default State:** `bg-[#100C01] text-white border border-[#100C01]`
   - **Hover State:** `hover:bg-[#F05023] hover:border-[#F05023] transition-all duration-200`

2. **Floating Search Bar**:
   - **Border Radius:** `rounded-xl`
   - **Shadow:** `shadow-[0_4px_24px_rgb(0,0,0,0.06)]`
   - **Border:** `border-[#E5E5E7]`
   - **Focus State:** `focus-within:border-[#F05023] focus-within:ring-4 focus-within:ring-[#F05023]/15`

3. **Navbar & Logo**:
   - **Logo Path:** `public/images/logo/nav-logo.svg`
   - **Favicon Path:** `public/images/logo/favicon.ico`
   - **Logo Sizing:** `h-13 sm:h-15 md:h-16 w-auto`
   - **Header Background:** `bg-white/85 backdrop-blur-md sticky top-0`

---

## 5. Ambient Atmospheric Glow (Fiilo Style)

Rich brand orange wash anchored strictly to the left & right outer edges, keeping the center 100% pure white:

- **Left Side Flank:**
  - Gradient: `from-[#F05023] via-[#F05023]/70 to-transparent`
  - Blur: `blur-[55px]` (Mobile) / `blur-[125px]` (Desktop)
  - Opacity: `75% - 80%`
- **Right Side Flank:**
  - Gradient: `from-[#F05023] via-[#F05023]/65 to-transparent`
  - Blur: `blur-[55px]` (Mobile) / `blur-[125px]` (Desktop)
  - Opacity: `70% - 75%`
- **Center Canvas:** Pure White mask (`bg-[radial-gradient(ellipse_at_center,_white_45%,_transparent_100%)]`) to ensure maximum readability.

