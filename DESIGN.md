# Suede

Suede is a refined WordPress design system centered on authority and presence. Its visual language favors strong typography, generous space, deliberate contrast, purposeful imagery, and confident composition.

## Principles

* Prefer fewer, stronger ideas. Decide what deserves attention and give it scale, weight, and room. Remove anything that weakens the message.
* Hierarchy before decoration. Establish priority through type, spacing, imagery, and contrast. Let those elements do the work before adding more.
* Space makes things matter. Give content enough room to breathe. Apply it with genuine purpose, not simply for visual effect or decoration.
* Repetition creates coherence. Use consistent patterns to build familiarity and rhythm. Introduce variation only when the content calls for it.
* Restraint, not minimalism. Be selective while preserving balance, character, and expression. Compositions should feel confident and complete.

## Composition

Every composition should have a clear visual priority. Establish what deserves attention first, then make supporting elements visibly subordinate.

Use controlled contrast to create tension and hierarchy. Pair large with small, dense with open, image with type, and dominant with quiet. Restraint should limit competing ideas, not their scale.

Design relationships rather than assembling components. Begin with the visual relationship the content should create, then introduce only the elements needed to construct it.

Let important elements carry meaningful visual weight. Typography and imagery may become architectural elements within a composition. When something deserves presence, give it sufficient scale and territory.

Create rhythm through repetition and change. Repeat structures within a composition to establish order, then vary composition between sections when the content calls for a change in emphasis, pace, or mode.

Prefer subtraction. Before adding an element, determine whether hierarchy, typography, space, imagery, or contrast can accomplish the same purpose.

## Design system

### Typography

Use **Google Sans Flex** as the primary typeface. Its variable width may be used expressively, with **110% expanded** or **85% condensed** treatments creating contrast while preserving typographic continuity. Use width selectively rather than as a default treatment.

A secondary or accent typeface may also be introduced when it strengthens the character, subject, or editorial quality of the design. Use it selectively and maintain clear typographic hierarchy rather than creating variety for its own sake.

Set body text at **18px**, **400** weight, with generous line height. Headings use **500** weight with tight line height and no added letter spacing. Use **600** weight selectively for strong emphasis rather than as a default display weight.

Apply font smoothing to improve typographic rendering, particularly for light text on dark backgrounds. Use `-webkit-font-smoothing: antialiased` and `-moz-osx-font-smoothing: grayscale` where supported.

Use Suede’s type scale as a controlled hierarchy: **12, 14, 16, 18, 20, 24, 30, 36, 48, and 60px**. Sizes above 18px may scale fluidly with the viewport. Avoid arbitrary intermediate sizes when the existing scale can establish the relationship.

Large type should feel architectural when the composition calls for presence, but scale should always communicate hierarchy rather than decoration. Keep supporting copy visibly subordinate.

Use uppercase text, **0.05em** letter spacing, and medium weight primarily for small navigational, label, metadata, and eyebrow treatments. Do not extend this treatment to long-form copy or prominent display typography.

### Color

Build primarily with black (`#000000`) and white (`#ffffff`). Use accent gold (`#aa6600`) as the default accent, applied deliberately for emphasis, interaction, rules, borders, and small moments of identity rather than as a dominant field color.

The accent color may be replaced when another color better serves the character, subject, or identity of the design. Prefer a single, purposeful accent that maintains strong contrast and preserves Suede’s restrained color system.

Use opacity variants of black (80%, 60%, 50%, 15%, 10%), white (80%, 60%, 50%, 15%, 10%), and accent (80%, 60%, 50%, 20%, 10%) to establish hierarchy while preserving the core palette. Prefer tonal variation within the system over introducing unrelated grays or secondary colors.

Maintain strong contrast for primary content. Softer opacity values are appropriate for secondary text, borders, backgrounds, overlays, and subtle depth, but should not weaken legibility.

Suede’s directional gradients are functional rather than decorative. Use **Fade Down**, **Fade Up**, **Fade Right**, or **Fade Left** when imagery needs contrast for overlaid content or when a composition benefits from controlled tonal depth. Avoid decorative gradients outside this vocabulary unless the concept clearly requires one.

### Layout and spacing

Treat **640px** as the primary reading width and **1280px** as the wide composition width. Long-form text should generally remain within the reading measure, while imagery, covers, grids, and more expressive compositions may use the wider canvas.

Use the spacing scale **20, 30, 40, 60, 80, and 100px**. Favor these values over arbitrary spacing so relationships remain coherent across the experience.

Use smaller values to connect related elements and larger values to separate sections, ideas, or changes in visual mode. Major sections should usually receive more space than the internal relationships within them.

Generous spacing is part of Suede’s character, but space must establish rhythm, focus, or hierarchy. Do not increase spacing merely to make a composition feel more luxurious or minimal.

### Responsive behavior

Preserve hierarchy as the canvas narrows. Allow type, spacing, imagery, and composition to scale or simplify deliberately rather than treating responsive design as a mechanical collapse of the desktop layout.

Stack elements when necessary, but retain the intended visual priority and relationships between them. Reduce complexity before reducing clarity.

### Accessibility

Maintain sufficient contrast, legible type, semantic hierarchy, and visible focus states throughout the experience. Accessibility should reinforce Suede’s clarity and restraint rather than be treated as a separate visual layer.

Respect reduced-motion preferences and ensure that meaning, navigation, and interaction never depend on animation alone.

### Shape and depth

Favor square, direct geometry. Buttons, form controls, separators, and primary interface elements should generally feel crisp rather than soft or pill-shaped. Rounded corners are available when the content or concept benefits from them, but they should be an exception rather than a default visual signature.

Use borders and rules sparingly, typically at **1px**, to define structure without creating visual noise.

Treat shadows as accents, not ambient decoration. Suede’s shadow vocabulary includes a soft neutral shadow, a solid offset accent shadow, and a subtle offset accent shadow. Use them selectively when an element needs separation or deliberate graphic emphasis; avoid routine card shadows across the interface.

### Interaction

Text links should remain visibly identifiable, normally through an underline. Hover states may shift toward the accent color while preserving clarity and contrast.

Primary buttons use the accent color, strong rectangular geometry, uppercase small text, medium weight, and generous padding. Outline buttons should retain the same visual discipline rather than becoming visually lighter in hierarchy than intended.

Interactive feedback should be immediate but quiet. Prefer color, border, or restrained transform changes over elaborate effects. Focus states must remain visible and should not be removed for aesthetic reasons.

### Iconography

Use **Google Material Symbols Sharp** for interface and supporting iconography, with a weight of **200** and an optical size of **48px** to maintain Suede’s refined, restrained visual character.

Use icons selectively and at purposeful scale. They should clarify meaning, navigation, or interaction rather than serve as decoration. Prefer simple, recognizable symbols and maintain consistent weight and visual treatment throughout an experience.

## Imagery

Imagery should reinforce the subject, character, and purpose of the experience while carrying meaningful visual weight within the composition.

Prefer fewer, substantial images over small decorative imagery. Homepage hero imagery should carry meaningful visual weight and may be full-width, contained, layered, or integrated into the composition. When using a full-width Cover block with overlaid text, consider Suede’s **Fade Down** gradient to support legibility and atmosphere.

When generating imagery, favor natural, refined visuals with restrained color and tonal qualities that complement Suede’s visual system rather than compete with it.

Choose imagery, cropping, focal point, scale, and positioning according to the composition. Crop for the composition, not merely to keep the subject visible. Do not use imagery merely to fill space.

## Motion

Motion should reinforce hierarchy, focus, and interaction without calling attention to itself.

Prefer subtle transitions and Suede’s existing motion vocabulary over decorative animation. Use motion to introduce content, clarify interaction, or add depth where appropriate.

Use **250ms** for quick interface transitions and **500ms** for larger visual movement. Favor **ease-out** timing so motion feels responsive and settles naturally.

For entrance motion, use a restrained travel distance of approximately **30px**. For image zoom interactions, use a subtle scale of approximately **1.05**. These values should feel barely perceptible rather than theatrical.

Animation should feel deliberate, restrained, and consistent across the experience. Avoid effects that compete with the content or exist only for novelty.

Respect reduced-motion preferences. Motion is an enhancement to hierarchy and interaction, never a requirement for understanding or navigation.

## Application

Treat these specifications as constraints, not templates. Use them to preserve Suede’s visual character across different subjects and media without forcing compositions into a predetermined aesthetic. Interpret the system according to the content, context, and medium. Variation should strengthen the composition rather than add novelty.
